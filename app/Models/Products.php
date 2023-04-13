<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    //To tell your model to interact with a different table (optional) usw:
    //protected $table="tableName";

    /*
    The default primary key is the $table->id() in migration to change the primary id to another column use:
    protected $primaryKey= "columnName";
    */

    /*
    timestamp() used for created_at and updated_at column can be disable using:
        protected $timestamps= false; //default value is true
    */

    /*
    To customized the format of time added to database use:
        protected $dateTime= 'U'; //pass in any PHP date character
    */

    /*
    If you're using multiple database driver and want to use specific driver for a specific model, use:
        protected $connection= 'sqlite'; //value is the database connection you eant to use for this model
    */

    /*
     You can set a default value for a column in model, use:
        protected $attributes= [
            'columnName'=> 'defaultValueFor Column'
        ];
     */
}
