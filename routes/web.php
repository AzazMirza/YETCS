<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('/404', function () {
    return view('404');
})->name('404');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/blog-single', function () {
    return view('blog-single');
})->name('blog-single');

Route::get('/How-We-Handle-Mold-the-Right-Way-A-Brooklyn-Centric-Approach-to-a-Healthier-Home', function () {
    return view('How-We-Handle-Mold-the-Right-Way-A-Brooklyn-Centric-Approach-to-a-Healthier-Home');
})->name('How-We-Handle-Mold-the-Right-Way-A-Brooklyn-Centric-Approach-to-a-Healthier-Home');
Route::get('/Lead-Paint-&-Asbestos-Hidden-Hazards-in-Brooklyn’s-Residential-&-Commercial-Properties', function () {
    return view('Lead-Paint-&-Asbestos-Hidden-Hazards-in-Brooklyn’s-Residential-&-Commercial-Properties');
})->name('Lead-Paint-&-Asbestos-Hidden-Hazards-in-Brooklyn’s-Residential-&-Commercial-Properties');
Route::get('/Mold-Asbestos-and-Lead-Paint-A-2025-Guide-for-Property-Owners', function () {
    return view('Mold-Asbestos-and-Lead-Paint-A-2025-Guide-for-Property-Owners');
})->name('Mold-Asbestos-and-Lead-Paint-A-2025-Guide-for-Property-Owners');
Route::get('/Mold-in-Your-Home-How-It-Spreads-and-Why-Fast-Cleaning-Saves-Thousands', function () {
    return view('Mold-in-Your-Home-How-It-Spreads-and-Why-Fast-Cleaning-Saves-Thousands');
})->name('Mold-in-Your-Home-How-It-Spreads-and-Why-Fast-Cleaning-Saves-Thousands');
Route::get('/Our-Deep-Cleaning-Checklist-What-We-Actually-Do-When-You-Book-Us', function () {
    return view('Our-Deep-Cleaning-Checklist-What-We-Actually-Do-When-You-Book-Us');
})->name('Our-Deep-Cleaning-Checklist-What-We-Actually-Do-When-You-Book-Us');
Route::get('/Professional-Mold-Lead-&-Asbestos-Remediation-Services-for-Real-Estate', function () {
    return view('Professional-Mold-Lead-&-Asbestos-Remediation-Services-for-Real-Estate');
})->name('Professional-Mold-Lead-&-Asbestos-Remediation-Services-for-Real-Estate');
Route::get('/The-Hidden-Dangers-of-Asbestos-Are-You-at-Risk-in-Your-Brooklyn-Property', function () {
    return view('The-Hidden-Dangers-of-Asbestos-Are-You-at-Risk-in-Your-Brooklyn-Property');
})->name('The-Hidden-Dangers-of-Asbestos-Are-You-at-Risk-in-Your-Brooklyn-Property');
Route::get('/The-Hidden-Health-Risks-Lurking-in-Unclean-Properties', function () {
    return view('The-Hidden-Health-Risks-Lurking-in-Unclean-Properties');
})->name('The-Hidden-Health-Risks-Lurking-in-Unclean-Properties');
Route::get('/the-importance-of-Mold-remediation-Protecting-your-health-and-property', function () {
    return view('the-importance-of-Mold-remediation-Protecting-your-health-and-property');
})->name('the-importance-of-Mold-remediation-Protecting-your-health-and-property');
Route::get('/Top-5-Signs-Your-Warehouse-or-Office-Needs-a-Professional-Environmental-Inspection', function () {
    return view('Top-5-Signs-Your-Warehouse-or-Office-Needs-a-Professional-Environmental-Inspection');
})->name('Top-5-Signs-Your-Warehouse-or-Office-Needs-a-Professional-Environmental-Inspection');
Route::get('/social-media', function () {
    return view('social-media');
})->name('social-media');