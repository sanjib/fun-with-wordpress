# Database

#### Data sanitization

- esc_sql
- absint

#### $wpdb

**Always use prepare statements for queries. Especially important when accepting user submitted parameters.**

```
$wpdb->update(string $table, array $data, array $where, array $format, array $where_format);
$wpdb->delete
$wpdb->insert

$wpdb->prepare(string $query, ...$args) 
$wpdb->get_row
$wpdb->get_results
$wpdb->get_var
$wpdb->get_col
```

- $table: table name
- $data: assoc array of column, value
- $where: assoc array of column, value
- $format: array of $data format specifiers (%s, %d, %f)  
- $where_format: array of $where format specifiers (%s, %d, %f)

Format specifiers:
- %s **string** 
- %d **int**
- %f **float**
