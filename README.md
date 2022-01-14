# Wordpress Plugin - CSS based Modal openable from page #anchor
Simple Wordpress plugin allowing to display a modal when URL ends with a specific #anchor through a shortcode.


## Shortcode
```
[anchor-to-modal]
```

## Parameters

| Parameter              | Description               |
|------------------------|------------------------|
| **anchor**             |  URL anchor to use |
| **title**              |  Text content of the modal title |
| **title_class**        |  Class of the modal title |
| **content**            |  Text content of the modal |
| **content_class**      |  CSS class of the modal content |
| **close_btn_class**    |  Close button CSS class |
| **close_btn_label**    |  Close button label |
| **window_background**  |  CSS color of the modal background |


## Usage example

Add this shortcode to a page named [http://example.ext/subscribe](http://example.ext/subscribe )
```
[anchor-to-modal anchor="valid" title="Thanks for your interest!" close_btn_label="Back to website"]
```