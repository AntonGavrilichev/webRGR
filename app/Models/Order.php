<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice() {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    public function getFullCount() {
        $sum = 0;
        foreach ($this->products as $product) {
            if (!is_null($this->pivot)) {
                $sum += $product->pivot->count;
            }
        }
        return $sum;
    }

    public function saveOrder($name, $email, $id) {
        if ($this->status == 0) {
            $this->name = $name;
            $this->email = $email;
            $this->user_id = $id;
            $this->status = 1;
            $this->total_price = $this->getFullPrice();
            $this->save();
            session()->forget('orderId');
            return true;
        } else {
            return false;
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
