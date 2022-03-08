<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AssistanceController;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\CityProgramController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Stats\BeneficiaryStatController;
use App\Http\Controllers\Stats\UserStatController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes(['register'=> false,'reset'=>false]);


Route::middleware(['auth'])->group(function () {
    Route::get('/',function ()
    {
        return redirect('/home');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::resource('users', UserController::class)->name('')
    Route::resource('users',UserController :: class);
    Route::resource('areas',AreaController :: class);
    Route::resource('positions',PositionController::class);
    Route::resource('beneficiaries',BeneficiaryController::class);
    Route::resource('programs',ProgramController::class);
    Route::get('instructorProgram/{program}',[ProgramController::class,'instructorProgram'])->name('instructorProgram.instructorProgram');
    Route::post('addInstructorProgram',[ProgramController::class,'addInstructor'])->name('addInstructorProgram.addInstructor');
    Route::get('removeInstructorProgram/{program}/{user}',[ProgramController::class,'removeInstructor'])->name('removeInstructorProgram.removeInstructor');
    Route::resource('activities',ActivityController::class);
    Route::resource('instructors',InstructorController::class);
    Route::resource('groups',GroupController::class);
    Route::resource('assistance',AssistanceController::class);
    Route::get('removeBeneficiaryFromAssistance',[AssistanceController::class,'removeBeneficiary'])->name('assistance.removeBeneficiary');
    Route::get('cityProgram/edit/{program}',[CityProgramController::class,'edit'])->name('cityProgram.edit');//(se leda un nombre a la ruta)lo que coloquen en la ruta despues del edit l oguarda en la variable program
    Route::post('cityProgram',[CityProgramController::class,'store'])->name('cityProgram.store');//(se leda un nombre a la ruta)lo que coloquen en la ruta despues del edit l oguarda en la variable program
    Route::get('cityProgram',[CityProgramController::class,'removeCity'])->name('cityProgram.removeCity');//(se leda un nombre a la ruta)lo que coloquen en la ruta despues del edit l oguarda en la variable program
    
    Route::prefix('stats')->group(function () {
        Route::get('user-types', [UserStatController::class,'userTypes']);
        Route::get('beneficiary-for-ethnicgroups', [BeneficiaryStatController::class,'beneficiariesForEthnicGroups']);
        Route::get('beneficiary-for-cities', [BeneficiaryStatController::class,'beneficiariesForCities']);
        Route::get('beneficiary-for-genders', [BeneficiaryStatController::class,'beneficiariesForGenders']);
    });
    Route::get('/export/users', [ExcelController::class, 'UserExport'])->name('export.users');
    Route::get('/export/beneficiaries', [ExcelController::class, 'BeneficiaryExport'])->name('export.beneficiaries');
    Route::get('/export/activities', [ExcelController::class, 'activityExport'])->name('export.activities');
});
