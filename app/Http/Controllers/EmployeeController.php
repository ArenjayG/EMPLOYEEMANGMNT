<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\employee;
class EmployeeController extends Controller
{
    protected $employee;
    
   
    
    public function index()
    {
        $response['employees'] = $this->employee->all();
        return view('pages.index')->with($response);
    }    

    public function __construct(){
        $this->employee = new employee();
        
    }
    
    public function store(Request $request)
    {
      
        $this->employee->create($request->all());
        return redirect()->back();
    }
  
    
public function edit($id)
{
    $employee = Employee::find($id);

    if (!$employee) {
        
        abort(404);
    }

    return view('pages.edit', compact('employee'));
}

public function index1()
{
    $response['employees'] = $this->employee->all();
    return view('new.index1')->with($response);
}

    public function update(Request $request, string $id)
    {
        $employee = $this->employee->find($id);
        $employee->update(array_merge($employee->toArray(), $request->toArray()));
        return redirect('employee');
    }
    public function destroy(string $id)
    {
        $employee = $this->employee->find($id);
        $employee->delete();
        return redirect('employee');
    }

   
}