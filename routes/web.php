<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|// Route::get('/google/login', 'User\UserController@redirectToGoogle')->name('google.login');
        // Route::get('/google/login/callback', 'User\UserController@handleGoogleCallback');
        // facebook
        // Route::get('/facebook/login', 'User\UserController@redirectToFacebook')->name('facebook.login');
        // Route::get('/facebook/login/callback', 'User\UserController@handleFacebookCallback');
        
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
        // new
        Route::post('/role-permission/store', 'Admin\RolePermissionController@rolePermissionStore')->name('role-permission.store');
        Route::post('/role/store', 'Admin\RolePermissionController@roleStore')->name('role.store');
        Route::post('/delete/role', 'Admin\RolePermissionController@deleteRole')->name('role.delete');
        Route::post('/add/role/member', 'Admin\RolePermissionController@addMember')->name('add.role.member');
        Route::post('/delete/role/member', 'Admin\RolePermissionController@deleteRoleMember')->name('delete.role.member');
        // end new
        Route::get('/roles', 'Admin\RolePermissionController@rolesPermissions')->name('roles_permissions');
        // Route::get('/create/role-permission', 'Admin\RolePermissionController@createRolesPermissions')->name('create.role_permission');
        // Route::post('/role/save', 'Admin\RolePermissionController@saveRolePermission')->name('role_permission.save');
        // delete role 
        // Route::get('/delete/role/{id}', 'Admin\RolePermissionController@deleteRole')->name('role.delete');
        //edit role
        // Route::get('/edit/role/{id}', 'Admin\RolePermissionController@editeRole')->name('role.edit');
        // update role 
        // Route::post('/update/role', 'Admin\RolePermissionController@updateRole')->name('role.update');
        //and permission route
        // Route::get('/permissions', 'Admin\RolePermissionController@permissions')->name('permissions');
        // Route::get('/create/permission', 'Admin\RolePermissionController@createPermissions')->name('create.permission');
        // Route::post('/permission/save', 'Admin\RolePermissionController@savePermission')->name('permission.save');
        // //delete permission 
        // Route::get('/delete/permission/{id}', 'Admin\RolePermissionController@deletePermission')->name('permission.delete');
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
        // ========================================= Contracts Routes ============================================ \\
        Route::get('/contracts', 'Admin\ContractController@allContracts')->name('contracts');
        Route::get('/create/contract/', 'Admin\ContractController@create')->name('contract.create');
        Route::post('/contract/store', 'Admin\ContractController@contractStore')->name('contract.store');
        Route::get('/contract/edit/{id}', 'Admin\ContractController@contractEdit')->name('contract.edit');
        Route::post('/contract/update', 'Admin\ContractController@contractUpdate')->name('contract.update');
        Route::post('/contract/renew', 'Admin\ContractController@contractRenew')->name('contract.renew');
        Route::get('/contract/show/{id}', 'Admin\ContractController@contractShow')->name('contract.show');
        Route::get('/contract/delete/{id}', 'Admin\ContractController@contractDelete')->name('contract.delete');
        Route::post('/contract/type/store', 'Admin\ContractController@typeStore')->name('contract.type.store');
        Route::post('/contract/type/delete', 'Admin\ContractController@deleteType')->name('contract.type.delete');
        Route::post('/renew-contract/delete', 'Admin\ContractController@deleteRenewContract')->name('contract.renewcontract.delete');
        Route::get('/contract/download/{id}', 'Admin\ContractController@contractDownload')->name('contract.download');
        Route::get('/export-excel/contract', 'Admin\ContractController@exportInToExcel')->name('export.contract.excel');
        Route::get('/export-csv/contract', 'Admin\ContractController@exportInToCSV')->name('export.contract.csv');
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
        Route::post('/project/file/delete', 'Admin\ProjectController@deleteFile')->name('project.file.delete');
        Route::post('/project/file/download', 'Admin\ProjectController@downloadFile')->name('project.file.download');
        Route::get('/add/project/file/{id}', 'Admin\ProjectController@addProjectFile')->name('project.add.file');
        Route::post('/project/file/store', 'Admin\ProjectController@projectFileStore')->name('project.file.store');
        // ========================================= Tasks Routes ============================================ \\
        Route::get('/tasks', 'Admin\TaskController@allTasks')->name('tasks');
        Route::get('/create/task', 'Admin\TaskController@create')->name('task.create');
        Route::post('/task/store', 'Admin\TaskController@taskStore')->name('task.store');
        Route::get('/show/task/{id}', 'Admin\TaskController@showTask')->name('task.show');
        Route::post('/task/assignee/add', 'Admin\TaskController@taskAssigneesAdd')->name('task.assignee.add');
        Route::get('/task/assignee/delete/{id}', 'Admin\TaskController@deleteTaskAssingnee')->name('task.delete.assignee');
        Route::post('/task/file/delete', 'Admin\TaskController@deleteFile')->name('task.file.delete');
        Route::post('/task/file/download', 'Admin\TaskController@downloadFile')->name('task.file.download');
        Route::get('/add/task/file/{id}', 'Admin\TaskController@addTaskFile')->name('task.add.file');
        Route::post('/task/file/store', 'Admin\TaskController@taskFileStore')->name('task.file.store');
        Route::post('/task/label/add', 'Admin\TaskController@taskLabelAdd')->name('task.label.add');
        Route::get('/task/label/{id}', 'Admin\TaskController@deleteTaskLabel')->name('task.delete.label');
        Route::get('/export-excel/task', 'Admin\TaskController@exportInToExcel')->name('export.task.excel');
        Route::get('/export-csv/task', 'Admin\TaskController@exportInToCSV')->name('export.task.csv');
        Route::get('/task/kanban-board/', 'Admin\TaskController@kanbanBoard')->name('task.kanbanBoard');
        Route::post('/task/category/store', 'Admin\TaskController@categoryStore')->name('task.category.store');
        Route::post('/task/category/delete', 'Admin\TaskController@deleteCategory')->name('task.category.delete');
        Route::get('/task/delete/{id}', 'Admin\TaskController@deleteTask')->name('task.delete');
        Route::get('/task/edit/{id}', 'Admin\TaskController@editTask')->name('task.edit');
        Route::post('/task/update', 'Admin\TaskController@taskUpdate')->name('task.update');
        // task label
        Route::get('/create/task-label', 'Admin\TaskLabelController@create')->name('task.label.create');
        Route::post('/task/label/store', 'Admin\TaskLabelController@labelStore')->name('task.label.store');
        Route::get('/task-label-list', 'Admin\TaskLabelController@labelList')->name('task.label.list');
        Route::get('/task/label/delete/{id}', 'Admin\TaskLabelController@delete')->name('task.label.delete');
        Route::get('/task/label/edit/{id}', 'Admin\TaskLabelController@edit')->name('task.label.edit');
        Route::post('/task/label/update', 'Admin\TaskLabelController@labelUpdate')->name('task.label.update');
        // ========================================= Task Board Routes ============================================ \\
        Route::get('/task-board', 'Admin\TaskBoardController@taskBoard')->name('task-board');
        Route::get('/create/task-c', 'Admin\TaskBoardController@createCompletedTask')->name('create.completed.task');
        Route::get('/create/task-i', 'Admin\TaskBoardController@createIncompleteTask')->name('create.incomplete.task');
        // ========================================= Task Time Logs Routes ============================================ \\
        // ========================================= Fainance Routes ============================================ \\
        // ========================================= Products Routes ============================================ \\
        Route::get('/products', 'Admin\ProductController@products')->name('products');
        Route::get('/create/product', 'Admin\ProductController@create')->name('product.create');
        Route::post('/product/store', 'Admin\ProductController@store')->name('product.store');
        Route::get('/product/delete/{id}', 'Admin\ProductController@delete')->name('product.delete');
        Route::get('/product/edit/{id}', 'Admin\ProductController@edit')->name('product.edit');
        Route::post('/product/update', 'Admin\ProductController@update')->name('product.update');
        Route::get('/export-excel/product', 'Admin\ProductController@exportInToExcel')->name('product.export.excel');
        Route::get('/export-csv/product', 'Admin\ProductController@exportInToCSV')->name('product.export.csv');
        // Product Category Routes
        Route::post('/product/category/store', 'Admin\ProductCategoryController@store')->name('product.category.store');
        Route::post('/product/category/delete', 'Admin\ProductCategoryController@deleteCategory')->name('product.category.delete');
        // Product Sub Category Routes
        Route::post('/product/sub-category/store', 'Admin\ProductSubCategoryController@store')->name('product.subCategory.store');
        Route::post('/product/sub-category/delete', 'Admin\ProductSubCategoryController@deleteSubCategory')->name('product.subCategory.delete');
        // Product Tax Routes
        Route::post('/product/tax/store', 'Admin\ProductController@taxStore')->name('product.tax.store');
        Route::post('/product/tax/delete', 'Admin\ProductController@taxDelete')->name('product.tax.delete');

        // ========================================= Tickets Routes ============================================ \\
        Route::get('/tickets', 'Admin\TicketController@tickets')->name('tickets');
        Route::get('/create/ticket', 'Admin\TicketController@create')->name('ticket.create');
        Route::post('/ticket/store', 'Admin\TicketController@store')->name('ticket.store');
        Route::get('/ticket/view/{id}', 'Admin\TicketController@view')->name('ticket.view');
        Route::post('/ticket/update', 'Admin\TicketController@update')->name('ticket.update');
        Route::get('/ticket/delete/{id}', 'Admin\TicketController@delete')->name('ticket.delete');
        Route::get('/export-excel/ticket', 'Admin\TicketController@exportInToExcel')->name('ticket.export.excel');
        Route::get('/export-csv/ticket', 'Admin\TicketController@exportInToCSV')->name('ticket.export.csv');
        // Ticket Types Routes
        Route::post('/ticket/type/store', 'Admin\TicketTypeController@store')->name('ticket.type.store');
        Route::post('/ticket/type/update', 'Admin\TicketTypeController@update')->name('ticket.type.update');
        Route::get('/ticket/types', 'Admin\TicketTypeController@types')->name('ticket.types');
        Route::post('/ticket/type/delete', 'Admin\TicketTypeController@delete')->name('ticket.type.delete');
        // Ticket Channels Routes
        Route::post('/ticket/channel/store', 'Admin\TicketChannelController@store')->name('ticket.channel.store');
        Route::post('/ticket/channel/update', 'Admin\TicketChannelController@update')->name('ticket.channel.update');
        Route::get('/ticket/channels', 'Admin\TicketChannelController@channels')->name('ticket.channels');
        Route::post('/ticket/channel/delete', 'Admin\TicketChannelController@delete')->name('ticket.channel.delete');

        // Ticket Agents Route 
        Route::get('/ticket/agents', 'Admin\TicketAgentController@agents')->name('ticket.agents');
        Route::post('/ticket/agent/store', 'Admin\TicketAgentController@store')->name('ticket.agent.store');
        Route::post('/ticket/agent/change/group', 'Admin\TicketAgentController@changeGroup')->name('ticket.agent.change.group');
        Route::post('/ticket/agent/change/status', 'Admin\TicketAgentController@changeStatus')->name('ticket.agent.change.status');
        Route::post('/ticket/agent/delete', 'Admin\TicketAgentController@delete')->name('ticket.agent.delete');
        // Ticket Group Routes
        Route::post('/ticket/group/delete', 'Admin\TicketGroupController@delete')->name('ticket.group.delete');
        Route::post('/ticket/group/store', 'Admin\TicketGroupController@store')->name('ticket.group.store');

        // ========================================= Notice Board Routes ============================================ \\
        Route::get('/notice-boards', 'Admin\NoticeBoardController@noticeBords')->name('notice-boards');
        Route::get('/create/notice-board', 'Admin\NoticeBoardController@create')->name('create.notice-board');
        Route::post('/notice-board/store', 'Admin\NoticeBoardController@store')->name('notice-board.store');
        Route::get('/notice-board/delete/{id}', 'Admin\NoticeBoardController@delete')->name('notice-board.delete');
        Route::get('/notice-board/edit/{id}', 'Admin\NoticeBoardController@edit')->name('notice-board.edit');
        Route::post('/notice-board/update', 'Admin\NoticeBoardController@update')->name('notice-board.update');
        Route::get('/export-excel/notice-board', 'Admin\NoticeBoardController@exportInToExcel')->name('notice-board.export.excel');
        Route::get('/export-csv/notice-board', 'Admin\NoticeBoardController@exportInToCSV')->name('notice-board.export.csv');

        // ========================================= Expenses Routes ============================================ \\
        Route::get('/expenses', 'Admin\ExpenseController@expenses')->name('expenses');
        Route::get('/expense/create', 'Admin\ExpenseController@create')->name('expense.create');
        Route::post('/expense/store', 'Admin\ExpenseController@store')->name('expense.store');
        Route::post('/expense/change/status', 'Admin\ExpenseController@changeStatus')->name('expense.change.status');
        Route::get('/expense/delete/{id}', 'Admin\ExpenseController@delete')->name('expense.delete');
        Route::get('/export-excel/expense', 'Admin\ExpenseController@exportInToExcel')->name('expense.export.excel');
        Route::get('/export-csv/expense', 'Admin\ExpenseController@exportInToCSV')->name('expense.export.csv');
        // fetch member 
        Route::post('/fetch/member', 'Admin\ExpenseController@fetchMember')->name('fetch.member');
        // expenses category routes
        Route::post('/expense/category/store', 'Admin\ExpanseCategoryController@store')->name('expense.category.store');
        Route::post('/expense/category/delete', 'Admin\ExpanseCategoryController@delete')->name('expense.category.delete');
        // ========================================= Settings Routes ============================================ \\
        Route::get('/settings', 'Admin\OrganisationSettingsController@settings')->name('settings');
    });
});


// User Route 

Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:web',])->group(function () {
        // ========================================= Common Routes ============================================ \\
        Route::get('/login', 'User\UserController@showLoginForm')->name('login');
        Route::post('/check', 'User\UserController@check')->name('check');
        // s

    });

    Route::middleware(['auth:web',])->group(function () {
        Route::middleware('checkType')->group(function () {
            // ========================================= Employee Routes ============================================ \\
            Route::get('/employee/dashboard', 'User\Employee\EmployeeController@dashboard')->name('home');
            Route::get('/employee/projects', 'User\Employee\ProjectController@projects')->name('employee.projects');
        });

        Route::middleware('client')->group(function () {
            // ========================================= Client Routes ============================================ \\
            Route::get('/client/dashboard', 'User\Client\ClientController@dashboard')->name('client.dashboard');
            Route::get('/client/projects', 'User\Client\ProjectController@projects')->name('client.projects');
        });


        // ========================================= Common Routes ============================================ \\
        Route::post('/logout', 'User\UserController@logout')->name('logout');
    });
});

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
