# SelectColumn

SelectColumn for Yii CGridView. It replaces cell content with label from map. And it sets that map as dropdown filter.

## Installing

```
composer require urmaul/yii-selectcolumn dev-master
```

## Using

First, add this line to imports config:

```php
'import'=>array(
	...
	'SelectColumn',
	...
),
```

### Using with enum attributes

Works great with [EnumAttributes behavior](https://github.com/urmaul/enumattributes).

```php
array(
	'class' => 'SelectColumn',
	'name' => 'status',
	'labels' => $model->statusEnum->valueLabels,
),
```

### Using with relations

Works great with [ListData behavior](https://github.com/urmaul/listdata).

```php
array(
	'class' => 'SelectColumn',
	'name' => 'category_id',
	'labels' => Category::model()->listData,
),
```
