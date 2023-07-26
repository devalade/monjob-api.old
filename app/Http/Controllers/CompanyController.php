<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        return response()->json([ 'data' => Company::where('user_id', \Auth::user()->id)->get()  ]);
    }

    public function show(Company $company) {
        return response()->json([ 'data' => $company  ]);
    }

    /**
     * @throws \Throwable
     */
    public function store(StoreCompanyRequest $request)
    {
        try {
            $company = Company::create($request->validated());
            return response()->json([ 'data' => $company, 'message' => 'Entréprise créée avec succès.' ]);
        } catch (\Throwable $th) {
            \Log::error($th);
            throw $th;
        }
    }

    public function update(UpdateCompanyRequest $request, Company $company) {
        try {
            $company->update($request->validated());
            return response()->json([ 'data' => $company, 'message' => 'Entréprise modifiée avec succès.' ]);
        } catch (\Throwable $th) {
            \Log::error($th);
            throw $th;
        }
    }

    public function delete(Company $company) {
        try {
            $company->delete();
            return response()->json([ 'message' => 'Entréprise supprimée avec succès.' ]);
        } catch (\Throwable $th) {
            \Log::error($th);
            throw $th;
        }
    }
}
