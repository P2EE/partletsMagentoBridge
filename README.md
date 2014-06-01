Partlets Magento Bridge
=======================

provides a basic setup to make use of partlets from inside of Magento.
Later it will also provide some Magento specific requirement resolver. 


**currently very experimentel**


Usage
-----

* include autoloading for the files (for example via composer or PSR0 autoloader)
* require ```bootstrap.php``` after ```Mage.php``` was loaded


after this you are able to include defined Partlets via the layout xml files.

```xml
<block
        type="Example"
        name="partlet_example"
        >
    <action method="setPartlet"><partletClass>EmptyContainer</partletClass></action>
</block>
```


the Type Example is a simple classname defined in ```/src/p2ee/partletsMagentoBridge/Block/Example.php```.  
Its a very basic wrapper to reference a PartletClass you want to show.  
Per default only classes in namespace ```\p2ee\partletsMagentoBridge\Partlet``` are recognized as Partlets,
for allowing all classes with full namespaces you need to also call 
```<action method="setUseFullNamespace"><bool>1</bool></action>```

