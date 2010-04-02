<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of acSuperAvenidaImageTransformclass
 *
 * @author hboaventura
 */
class swImageTransform
{
    public static function executeNews($image)
    {
        var_dump($image);
        $img = new sfImage($image, self::mime_content_type($image));
        $img->setQuality(95);
        $img->resize(480,360);
        $img->save();
        $img->resize(120,90);
        $img->saveAs('thumb_', self::mime_content_type($image));
    }

    public static function listenToAdminSaveObject(sfEvent $event)
    {
        $objectModel = $event['object'];
        $upload_dir = sfConfig::get('sf_upload_dir');

        switch (get_class($objectModel)) {
        case 'News':
            if (is_file($upload_dir . '/news/' . $objectModel->getPicture())) {
                self::executeNews($upload_dir.'/news/'.$objectModel->getPicture());
            }
            break;
        }
    }

    public static function listenToAdminDeleteObject(sfEvent $event)
    {
        $objectModel = $event['object'];
        $upload_dir = sfConfig::get('sf_upload_dir');

        switch (get_class($objectModel)) {
        case 'Publicidade':
            if (is_file($upload_dir . '/publicidade/' . $objectModel->getLink())) {
                unlink($upload_dir.'/publicidade/'.$objectModel->getLink());
            }
            break;
        case 'Noticia':
        case 'Oferta':
            if (is_file($upload_dir . '/' . strtolower($objectModel) . '/' . $objectModel->getImagem())) {
                unlink($upload_dir . '/' . strtolower($objectModel) . '/' . $objectModel->getImagem());
            }
            break;
        }
    }

    public static function mime_content_type($filename) {

        $mime_types = array(

            'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',

            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',

            // archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',

            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',

            // adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',

            // ms office
            'doc' => 'application/msword',
            'rtf' => 'application/rtf',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',

            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        );
	$arFilename = explode('.',$filename);
	$ext = strtolower($arFilename[1]);
        if (array_key_exists($ext, $mime_types)) {
            return $mime_types[$ext];
        }
        elseif (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME);
            $mimetype = finfo_file($finfo, $filename);
            finfo_close($finfo);
            return $mimetype;
        }
        else {
            return 'application/octet-stream';
        }
    }

}
?>
