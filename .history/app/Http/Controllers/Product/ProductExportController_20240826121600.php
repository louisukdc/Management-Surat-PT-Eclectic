<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class ProductExportController extends Controller
{
    public function create()
    {
        $products = Product::all()->sortBy('product_name');

        $product_array[] = array(
            'Product Name',
            'Product Slug',
            'Category Id',
            'Unit Id',
            'Product Code',
            'Stock',
            "Stock Alert",
            'Buying Price',
            'Selling Price',
            'Product Image',
            "Note"
        );

        foreach ($products as $product) {
            $product_array[] = array(
                'Product Name' => $product->name,
                'Product Slug' => $product->slug,
                'Category Id' => $product->category_id,
                'Unit Id' => $product->unit_id,
                'Product Code' => $product->code,
                'Stock' => $product->quantity,
                "Stock Alert" => $product->quantity_alert,
                'Buying Price' => $product->buying_price,
                'Selling Price' => $product->selling_price,
                'Product Image' => $product->product_image,
                "Note" => $product->note
            );
        }

        $this->store($product_array);
    }

}
