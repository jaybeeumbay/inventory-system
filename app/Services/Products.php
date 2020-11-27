<?php
namespace App\Services;

use App\Models\Product as ProductModel;

class Products extends ProductModel
{
    /**
     * can add new product(s)
     *
     * @return bollean
     */
    public function addProduct()
    {
        ProductModel::create(['name' => 'wewe', 'supplier_id' => 1]);
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