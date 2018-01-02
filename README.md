# ufsprinkle-sevak

## Helper Sprinkle for UserFrosting

> This version only works with UserFrosting 4.1.x !

Install the following UserFrosting Sprinkles as submodules in you
app/sprinkles directory

* git submodule add git@github.com:ssnukala/ufsprinkle-datatables.git Datatables
* git submodule add git@github.com:ssnukala/ufsprinkle-sevak Sevak

Add     
```        
    "Datatables",
    "Sevak",
````
in your `sprinkles.json`

Run `composer update` then `php bakery bake` to install the sprinkle assets


### Go to 

http://<yoursite.com>/venues

You will see the Datatables in action.

The following are some key directories for implementing datatables

* `Sevak/src/Sprunje` - Sprunje to return data
* `Sevak/src/Controller/datatables/` - Contains the controllers for the Datatable formats
* `Sevak/schema/datatable` - Contains the .yaml file with datatable column Specifications
* `Sevak/templates/pages/` - sample of the dashboard that brings the datatables to life
* `Sevak/templates/tables/formatters/` - contains the column formatter HTML (uses row.<field_name> as a convention - this will be replaced by the actual value
