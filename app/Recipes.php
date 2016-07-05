<?php namespace App;


class Recipes extends GenericModel {

    protected $fillable = ['name', 'bundle_id', 'method', 'prepTime', 'cookTime', 'desc'];


}
