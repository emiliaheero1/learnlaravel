<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function getExcerptAttribute(){
        $parts = explode("\n\n", $this->body);
        if(strlen($parts[0])<300){
            return $parts[0];
        } else {
            $sentences = explode(".", $parts[0]);
            $excerpt = '';
            $length = count($sentences) < 5 ? count($sentences) : 5;
            for ($i=0;$i<5;$i++){
                $excerpt.= $sentences[$i] . ".";
            }
            return $excerpt;
        }

    }
}
