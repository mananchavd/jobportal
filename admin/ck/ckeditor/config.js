/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */
/* 
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
}; */


CKEDITOR.editorConfig = function(config) {

    config.filebrowserBrowseUrl = 'ck/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';

    config.filebrowserImageBrowseUrl = 'ck/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';

    config.filebrowserFlashBrowseUrl = 'ck/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';

    config.filebrowserUploadUrl = 'ck/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';

    config.filebrowserImageUploadUrl = 'ck/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';

    config.filebrowserFlashUploadUrl = 'ck/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';

};