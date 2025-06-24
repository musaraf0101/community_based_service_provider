<?php

namespace App\Http\Controllers;

use App\Models\Compliant;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function index()
    {
        return view('service_provider_pages.service_provider_dashboard_view');
    }
    public function edit($id)
    {
        return view('service_provider_pages.service_provider_update_view');
    }
    public function update(Request $request, $id) {}
    public function compliantList()
    {
        $complaint = Compliant::all();
        return view('service_provider_pages.compliant_list_view', compact('complaint'));
    }
    public function bookList()
    {
        return view('service_provider_pages.book_list_view');
    }

    public function complaintEdit($id)
    {
        $compliant = Compliant::find($id);
        return view('service_provider_pages.update_compliant_view', compact('compliant'));
    }
    public function complaintUpdate(Request $request, $id)
    {
        $request->validate([
            'complaint_status' => 'nullable|in:pending,going,complete'
        ]);

        $complaint = Compliant::find($id);
        $complaint->update($request->all());

        return redirect()->route('ServiceProvider.compliantList', $id);
    }
    public function complaintDelete($id){
        $complaint = Compliant::find($id);
        $complaint->delete();

        return redirect()->route('ServiceProvider.compliantList');
    }
}
