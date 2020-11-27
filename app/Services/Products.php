<?php
namespace App\Services;

use App\Models\Product as ProductModel;
use App\Models\Supplier;

class Products extends ProductModel
{
    /**
     * can add new product(s)
     *
     * @return bollean
     */
    public function supplier()
    {
        return $this->hasOne(Supplier::class,'id','supplier_id');
    }

    public function withSupplier()
    {
        return $this->with('supplier');
    }


    // /**
    //  * can retrieve all the product(s)
    //  *
    //  * @return array
    //  */
    // public static function get()
    // {
    //     dd(ProductModel::get());
    //     // dd('im in product now');
    // }



}
