```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $value) {
    if (is_string($value)) {
      $newData[] = strtolower($value);
    } else {
      $newData[] = $value; //Keep non-string values as they are
    }
  }
  return $newData;
}

$data = ['Apple', 'Banana', 123, 'Orange'];
$processedData = processData($data);
print_r($processedData);
```