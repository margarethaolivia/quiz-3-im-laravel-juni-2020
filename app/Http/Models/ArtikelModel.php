<?php 

namespace App\Http\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelModel {

    public static function user($data) 
    {
        unset($data['_token']);
        unset($data['_method']);
        $new_user = DB::table('users')->insert($data);
        return $new_user;
    }
    
    public static function get_all()
    {
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function save($data) 
    {
        unset($data['_token']);
        $new_article = DB::table('articles')->insert([
            'judul' => $data['judul'], 
            'isi' => $data['isi'],
            'slug' => Str::slug($data['judul'], '-'),
            'tag' => $data['tag'],
            'user_id' => 1
            ]);
        return $new_article;
    }

    public static function get_by_id($id)
    {
        $articles = DB::table('articles')->where('id', $id)->get();
        return $articles;
    }

    public static function update($id, $data)
    {
        $article_edited = DB::table('articles')->where('id', $id)->update([
            'judul' => $data['judul'], 
            'isi' => $data['isi'],
            'slug' => Str::slug($data['judul'], '-'),
            'tag' => $data['tag'],
            'user_id' => 1
        ]);
        return $article_edited;
    }

    public static function delete($id)
    {
        $article_delete = DB::table('articles')->where('id', $id)->delete();
        return $article_delete;
    }

}