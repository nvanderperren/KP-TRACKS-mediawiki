# Settings

## LocalSettings.php

Change permissions: `sudo chmod 600 LocalSettings.php`

## Enable upload

Source: [Manual:Configuring file uploads](https://www.mediawiki.org/wiki/Manual:Configuring_file_uploads)

### Enable file upload

- in `LocalSettings.php`: `$wgEnableUploads = true;`
- make de `images`-folder writable:
  - in our local instanc: `chmod 777 images`
  - in production we'll probably `chown` to the webserver group and `chmod 775 images`
  
### Enable upload by copy of URL

It's possible to upload files by copying a URL of the file.

![upload by url](images/upload_url_1.png)

![kitties](images/upload_url_2.png)

Add following lines in `LocalSettings.php`:

```php
$wgGroupPermissions['autoconfirmed']['upload_by_url'] = true;
$wgAllowCopyUploads = true;
$wgCopyUploadsFromSpecialUpload = true;
```
  
### Configure file types
  
Default, only `.png`, `.gif`, `.jpg`, `.jpeg`, `.webp` can be uploaded. It's possible to add more file types via `LocalSettings.php`:

```php
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'doc','xls', 
  'pdf', 'ppt', 'tiff', 'bmp', 'docx', 'xlsx', 'pptx', 
  'tif', 'odt', 'ods', 'odp'
 );`
```

You can add or remove file types

### Enable use of images of Wikimedia Commons

InstantCommons is a feature which gives you immediate access to the millions of free (freely licensed) files in Wikimedia Commons.

Change following line in `LocalSettings.php`:

```php
# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;
```

Use images in your wiki text of Wikimedia Commons (example: [https://commons.wikimedia.org/wiki/File:Vooruit_Gent.jpg](https://commons.wikimedia.org/wiki/File:Vooruit_Gent.jpg)):

```wiki
[[Image:Vooruit_Gent.jpg]]
```

Source: [InstantCommons](https://www.mediawiki.org/wiki/InstantCommons).
