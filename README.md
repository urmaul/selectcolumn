# SelectColumn

SelectColumn for Yii CGridView. It replaces cell content with label from map. And it sets that map as dropdown filter.

## Using

First, add this line to imports config:

```php
'import'=>array(
	...
	'ext.selectcolumn.SelectColumn',
	...
),
```

Works great with [EnumAttributes](https://github.com/urmaul/enumattributes).

```php
array(
	'class' => 'SelectColumn',
	'name' => 'status',
	'labels' => $model->statusEnum->valueLabels,
),
```
