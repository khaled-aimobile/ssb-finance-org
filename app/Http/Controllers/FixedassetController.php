<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FixedAsset;
use Illuminate\Support\Facades\Auth;   

class FixedassetController extends Controller
{ 
    public function index(){                    
        return view('fixedAsset.index'); 
    }       
    public function add(Request $request)
    {
        $data = new FixedAsset();  
        $data->code = md5(uniqid(rand(), true));
        $data->name = $request->name;
        $data->description = $request->description;
        $data->serial_number = $request->serial_number;
        $data->class = $request->class;
        $data->status = $request->status;
        $data->model = $request->model;
        $data->supplier_name = $request->supplier_name;
        $data->current_value = $request->current_value;
        $data->disposal_date = $request->disposal_date; 
        $data->warranty_code = $request->warranty_code;
        $data->warranty_start_date = $request->warranty_start_date;     
        $data->warranty_end_date = $request->warranty_end_date;
        $data->warranty_period = $request->warranty_period;
        // $asset = Asset::create($data);
        $data->save();

        return response()->json(['error' => false,'message' => 'Successfully added new asset!' ]);
    }
    public function fetch(FixedAsset $asset)
    {   
        $assets = FixedAsset::all();
        $data = '';     
 
        if ($assets) {
            foreach ($assets as $asset) {
                $data .= '<tr>
                    <td>' . $asset['id'] . '</td>
                    <td>' . $asset['name'] . '</td>
                    <td>' . substr($asset['code'], 0, 15) . '...</td>   
                    <td>' . $asset['serial_number'] . '</td>
                    <td>' . $asset['model'] . '</td>
                    <td>' . $asset['supplier_name'] . '</td>   
                    <td>' . substr($asset['description'], 0, 15) . '...</td>
                    <td>
                    <a href="#" id="' . $asset['id'] . '" data-bs-toggle="modal" data-bs-target="#edit_asset_modal" class="btn btn-success btn-sm asset_edit_btn"><i class="ti ti-pencil text-white"></i></a>
                    <a href="#" id="' . $asset['id'] . '" data-bs-toggle="modal" data-bs-target="#detail_asset_modal" class="btn btn-info btn-sm asset_detail_btn"><i class="ti ti-eye text-white"></i></a>    
                  
                    <a href="#" id="' . $asset['id'] . '" class="btn btn-danger btn-sm asset_delete_btn"><i class="ti ti-trash text-white"></i></a>
                    </td>     
                </tr>'; 
            }
            return response()->json(['error' => false,'message' => $data ]);          
        } else {
            return response()->json(['error' => false,'message' => '<div class="text-secondary text-center fw-bold my-5">No assets found in the database!</div>' ]);       
        }
    }
    public function edit($id = null)
    {
        $assetModel = new FixedAsset();
        $asset = $assetModel->find($id);
        return response()->json(['error' => false,'message' => $asset ]); 
    } 
    public function update(Request $request, FixedAsset $asset)
    {
        $id = $request->id;    
        $asset = FixedAsset::find($id);
        $asset->update($request->all());
        return response()->json(['error' => false,'message' => 'Successfully updated asset!' ]); 
    }
    public function delete($id = null)     
    {
        $asset = FixedAsset::find($id);
        $asset->delete($id);
        return response()->json(['error' => false,'message' => 'Successfully deleted asset!']); 
    }      

    public function detail($id = null) {
        $asset = FixedAsset::find($id);
        return response()->json(['error' => false,'message' => $asset ]);          
    } 
}     
