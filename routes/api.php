<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tasks;

Route::get('/checkPalindrome', [tasks::class, 'checkPalindrome'])->name("checkPalindrome");
Route::get('/randomGroups', [tasks::class, 'randomGroups'])->name("randomGroups");
Route::get('/randomize', [tasks::class, 'randomize'])->name("randomize");
Route::get('/timeDiff', [tasks::class, 'timeDiff'])->name("timeDiff");
?>