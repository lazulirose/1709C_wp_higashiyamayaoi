# 1709C_wp_higashiyamayaoi
Client work to deliver in September, Higashiyama  yayoi site.

## Using a plug-in

### Advanced Custom Fields 4.4.12
> - name
>   - Field Name
>   - Import file


- Item table
  - item_name,item_code,item_capacity,item_sellby,item_raw,
item_place
  - All .php including ???_item.php
- Item input
  - price,remarks,focus
  - All .php including ???_item.php
- Media and News link
  - media_link1,media_link2,media_link3
  - news.php media.php

### PS Auto Sitemap
- Template "page.php"

__Annotation__

menu link to item list is using post-type recommended_item archive.

(use page template "itemlist" to rendering.)

using a hierarchical structure, "???_item.php" have parent item list(page template "itemlist"->post-type recommended_item archive).

the reason is that it is difficult to understand when displaying the structure of the site map.
