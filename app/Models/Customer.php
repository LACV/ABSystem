<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'idCustomer';//we specify the id of the table

    //begin:: we generate the functions to encrypt and decrypt the data
    public function getEncryptIdAttribute()
    {
        return Crypt::encrypt($this->attributes['idCustomer']);
    }
    public function getDecryptIdAttribute($value)
    {
        return Crypt::decrypt($value);
    } 
    //end:: we generate the functions to encrypt and decrypt the data

    //begin:: allows us to decrypt with the dependency injection method
    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where('idCustomer', decrypt($value))->firstOrFail();
    }

 
}
