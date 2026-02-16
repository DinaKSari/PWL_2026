<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang'; }
    public function about() {
        return 'NIM 244107020072, Nama Dina Kumala Sari'; }
    public function article($postId, $commentId) {
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; }
}
?>