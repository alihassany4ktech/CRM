<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// SuperAdmin Routes

Route::prefix('superAdmin')->name('superAdmin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::get('/login', 'SuperAdmin\SuperAdminController@showLoginForm')->name('login');
        Route::post('/check', 'SuperAdmin\SuperAdminController@login')->name('check');
    });
    Route::middleware(['auth:superAdmin'])->group(function () {
        Route::get('/', 'SuperAdmin\SuperAdminController@index')->name('dashboard');
        Route::post('/logout', 'SuperAdmin\SuperAdminController@logout')->name('logout');
        // profile
        Route::get('/profile', 'SuperAdmin\SuperAdminController@profile')->name('profile');
        Route::post('/profile/update', 'SuperAdmin\SuperAdminController@profileUpdate')->name('profile.update');
    });
});

// Admin Routes

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::get('/login', 'Admin\AdminController@showLoginForm')->name('login');
        Route::post('/check', 'Admin\AdminController@login')->name('check');
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', 'Admin\AdminController@index')->name('dashboard');
        Route::post('/logout', 'Admin\AdminController@logout')->name('logout');
        // profile 
        Route::get('/profile', 'Admin\AdminController@profile')->name('profile');
        Route::post('/profile/update', 'Admin\AdminController@profileUpdate')->name('profile.update');
        // ========================================= Client Routes ============================================ \\
        Route::get('/client/dashboard', 'Admin\AdminController@clientDashboard')->name('client.dashboard');
        Route::get('/clients', 'Admin\AdminController@clients')->name('clients');
        Route::get('/create/client', 'Admin\AdminController@create')->name('create.client');
        Route::post('/save/client', 'Admin\AdminController@saveClient')->name('client.save');
        Route::post('/update/client', 'Admin\AdminController@updateClient')->name('client.update');
        Route::get('/delete/client/{id}', 'Admin\AdminController@deleteClient')->name('client.delete');
        Route::get('/show/client/{id}', 'Admin\AdminController@showClient')->name('client.show');
        // role  
        Route::get('/roles', 'Admin\RolePermissionController@rolesPermissions')->name('roles_permissions');
        Route::get('/create/role-permission', 'Admin\RolePermissionController@createRolesPermissions')->name('create.role_permission');
        Route::post('/role/save', 'Admin\RolePermissionController@saveRolePermission')->name('role_permission.save');
        // delete role 
        Route::get('/delete/role/{id}', 'Admin\RolePermissionController@deleteRole')->name('role.delete');
        //edit role
        Route::get('/edit/role/{id}', 'Admin\RolePermissionController@editeRole')->name('role.edit');
        // update role 
        Route::post('/update/role', 'Admin\RolePermissionController@updateRole')->name('role.update');
        //and permission route
        Route::get('/permissions', 'Admin\RolePermissionController@permissions')->name('permissions');
        Route::get('/create/permission', 'Admin\RolePermissionController@createPermissions')->name('create.permission');
        Route::post('/permission/save', 'Admin\RolePermissionController@savePermission')->name('permission.save');
        //delete permission 
        Route::get('/delete/permission/{id}', 'Admin\RolePermissionController@deletePermission')->name('permission.delete');

        // ========================================= Leads Routes ============================================ \\
        Route::get('/leads', 'Admin\LeadsController@leads')->name('leads');
        Route::get('/create/lead', 'Admin\LeadsController@createLead')->name('create.lead');
        Route::post('/lead/store', 'Admin\LeadsController@storeLead')->name('lead.store');
        Route::post('/lead/update', 'Admin\LeadsController@updateLead')->name('lead.update');
        Route::get('/lead/show/{id}', 'Admin\LeadsController@showLead')->name('lead.show');
        Route::get('/lead/delete/{id}', 'Admin\LeadsController@deleteLead')->name('lead.delete');
        Route::post('/change/status', 'Admin\LeadsController@changeStatus')->name('lead.change.status');
        Route::post('/followUp/store', 'Admin\LeadsController@storeFollowUp')->name('lead.folowUp.store');
        // change lead to client
        Route::get('/change/lead-to-client/{id}', 'Admin\LeadsController@changeLeadToClient')->name('change.leadToCliet');
        // lead category store 
        Route::post('/category/store', 'Admin\LeadsController@storeCategory')->name('lead.category.store');
        // lead source store
        Route::post('/source/store', 'Admin\LeadsController@storeSource')->name('lead.source.store');
        // lead agent store
        Route::post('/agent/store', 'Admin\LeadsController@storeAgent')->name('lead.agent.store');
        // delete cataegory
        Route::post('/category/delete', 'Admin\LeadsController@deleteCategory')->name('lead.category.delete');
        // delete lead agent
        Route::post('/agent/delete', 'Admin\LeadsController@deleteAgent')->name('lead.agent.delete');
        // export leads in excel file
        Route::get('/export-excel/lead', 'Admin\LeadsController@exportInToExcel')->name('export.lead.excel');
        // export leads in csv file
        Route::get('/export-csv/lead', 'Admin\LeadsController@exportInToCSV')->name('export.lead.csv');
        // kanban board
        Route::get('/lead/kanban-board/', 'Admin\LeadsController@kanbanBoard')->name('lead.kanbanBoard');
        // ========================================= Employee Routes ============================================ \\
        Route::get('/employees', 'Admin\EmployeeController@employees')->name('employees');
        Route::get('/create/employee', 'Admin\EmployeeController@createEmployee')->name('create.employee');
        Route::post('/save/employee', 'Admin\EmployeeController@saveEmployee')->name('employee.save');
        Route::post('/update/employee', 'Admin\EmployeeController@updateEmployee')->name('employee.update');
        Route::get('/show/employee/{id}', 'Admin\EmployeeController@showEmployee')->name('employee.show');
        // Designation store
        Route::post('/designation/store', 'Admin\EmployeeController@designationStore')->name('employee.designation.store');
        // Department Store
        Route::post('/department/store', 'Admin\EmployeeController@departmentStore')->name('employee.department.store');
        // export employyees in excel file
        Route::get('/export-excel/empoyee', 'Admin\EmployeeController@exportInToExcel')->name('export.employee.excel');
        // export employyees in csv file
        Route::get('/export-csv/empoyee', 'Admin\EmployeeController@exportInToCSV')->name('export.employee.csv');
        // document store
        Route::post('/document/store', 'Admin\EmployeeController@documentStore')->name('employee.document.store');
        // delete document 
        Route::post('/document/delete', 'Admin\EmployeeController@deleteDocument')->name('employee.document.delete');
        // download document 
        Route::post('/download/delete', 'Admin\EmployeeController@downloadDocument')->name('employee.document.download');
        // ========================================= Department Routes ============================================ \\
        Route::get('/departments', 'Admin\DepartmenetController@departments')->name('departments');
        Route::post('/department/update', 'Admin\DepartmenetController@update')->name('department.update');
        Route::get('/edit/department/{id}', 'Admin\DepartmenetController@edit')->name('department.edit');
        Route::get('/delete/department/{id}', 'Admin\DepartmenetController@delete')->name('department.delete');
        // ========================================= Designation Routes ============================================ \\
        Route::get('/designations', 'Admin\DesignationController@designations')->name('designations');
        Route::get('/edit/designation/{id}', 'Admin\DesignationController@edit')->name('designation.edit');
        Route::post('/designation/update', 'Admin\DesignationController@update')->name('designation.update');
        Route::get('/delete/designation/{id}', 'Admin\DesignationController@delete')->name('designation.delete');
        // ========================================= Holiday Routes ============================================ \\
        Route::get('/holiday/index', 'Admin\HolidayController@index')->name('holiday.index');
        // ========================================= Projects Routes ============================================ \\
        Route::get('/projects', 'Admin\ProjectController@allProjects')->name('projects');
        Route::get('/create/project/', 'Admin\ProjectController@create')->name('project.create');
        Route::post('/project/store', 'Admin\ProjectController@projectStore')->name('project.store');
        Route::post('/project/category/store', 'Admin\ProjectController@categoryStore')->name('project.category.store');
        Route::post('/project/category/delete', 'Admin\ProjectController@deleteCategory')->name('project.category.delete');
        Route::get('/delete/project/{id}', 'Admin\ProjectController@delete')->name('project.delete');
        Route::get('/archive/project/{id}', 'Admin\ProjectController@archiveDestroy')->name('project.archive');
        Route::get('/archive/projects/', 'Admin\ProjectController@archiveProjects')->name('projects.archive');
        Route::get('/restore/project/{id}', 'Admin\ProjectController@restoreProject')->name('project.restore');
        Route::get('/show/project/{id}', 'Admin\ProjectController@showProject')->name('project.show');
        Route::get('/project/member/delete/{id}', 'Admin\ProjectController@deleteProjectMember')->name('project.delete.member');
        Route::post('/project/member/add', 'Admin\ProjectController@projectMembersAdd')->name('project.member.add');
        Route::get('/project/export', 'Admin\ProjectController@export')->name('project.export');
        Route::get('/edit/project/{id}', 'Admin\ProjectController@editProject')->name('project.edit');
        Route::post('/project/update', 'Admin\ProjectController@projectUpdate')->name('project.update');
    });
});


// User Route 

Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:web',])->group(function () {
        Route::get('/login', 'User\UserController@showLoginForm')->name('login');
        Route::post('/check', 'User\UserController@check')->name('check');
        // social login
        // Route::get('/google/login', 'User\UserController@redirectToGoogle')->name('google.login');
        // Route::get('/google/login/callback', 'User\UserController@handleGoogleCallback');
        // facebook
        // Route::get('/facebook/login', 'User\UserController@redirectToFacebook')->name('facebook.login');
        // Route::get('/facebook/login/callback', 'User\UserController@handleFacebookCallback');
    });

    Route::middleware(['auth:web',])->group(function () {
        Route::get('/home', 'User\UserController@dashboard')->name('home');
        Route::post('/logout', 'User\UserController@logout')->name('logout');
    });
});

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
