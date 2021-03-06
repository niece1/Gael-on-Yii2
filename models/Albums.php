<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "albums".
 *
 * @property int $id
 * @property string $title
 * @property string $image_main
 * @property string $image_01
 * @property string $image_02
 * @property string $image_03
 * @property string $image_04
 * @property string $image_05
 * @property string $image_06
 * @property string $image_07
 * @property string $image_08
 * @property string $image_09
 * @property string $image_10
 * @property string $image_11
 * @property string $image_12
 * @property string $image_13
 * @property string $image_14
 * @property string $image_15
 * @property string $image_16
 * @property string $image_17
 * @property string $image_18
 * @property string $image_19
 * @property string $image_20
 * @property string $image_21
 */
class Albums extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'albums';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
            [['title'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image_main' => 'Image Main',
            'image_01' => 'Image 01',
            'image_02' => 'Image 02',
            'image_03' => 'Image 03',
            'image_04' => 'Image 04',
            'image_05' => 'Image 05',
            'image_06' => 'Image 06',
            'image_07' => 'Image 07',
            'image_08' => 'Image 08',
            'image_09' => 'Image 09',
            'image_10' => 'Image 10',
            'image_11' => 'Image 11',
            'image_12' => 'Image 12',
            'image_13' => 'Image 13',
            'image_14' => 'Image 14',
            'image_15' => 'Image 15',
            'image_16' => 'Image 16',
            'image_17' => 'Image 17',
            'image_18' => 'Image 18',
            'image_19' => 'Image 19',
            'image_20' => 'Image 20',
            'image_21' => 'Image 21',
        ];
    }
    public function saveImage($filename)
    {
        $this->image_main = $filename;
        return $this->save(false);
    }
    public function getImage()
    {
        return ($this->image_main) ? '/uploads/' . $this->image_main : '/no-image.png';
    }
    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_main);
    }
    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }
    public function saveImage01($filename)
    {
        $this->image_01 = $filename;
        return $this->save(false);
    }
    public function getImage01()
    {
        return ($this->image_01) ? '/uploads/' . $this->image_01 : '/no-image.png';
    }
    public function deleteImage01()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_01);
    }
    public function saveImage02($filename)
    {
        $this->image_02 = $filename;
        return $this->save(false);
    }
    public function getImage02()
    {
        return ($this->image_02) ? '/uploads/' . $this->image_02 : '/no-image.png';
    }
    public function deleteImage02()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_02);
    }
    public function saveImage03($filename)
    {
        $this->image_03 = $filename;
        return $this->save(false);
    }
    public function getImage03()
    {
        return ($this->image_03) ? '/uploads/' . $this->image_03 : '/no-image.png';
    }
    public function deleteImage03()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_03);
    }
    public function saveImage04($filename)
    {
        $this->image_04 = $filename;
        return $this->save(false);
    }
    public function getImage04()
    {
        return ($this->image_04) ? '/uploads/' . $this->image_04 : '/no-image.png';
    }
    public function deleteImage04()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_04);
    }
    public function saveImage05($filename)
    {
        $this->image_05 = $filename;
        return $this->save(false);
    }
    public function getImage05()
    {
        return ($this->image_05) ? '/uploads/' . $this->image_05 : '/no-image.png';
    }
    public function deleteImage05()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_05);
    }
    public function saveImage06($filename)
    {
        $this->image_06 = $filename;
        return $this->save(false);
    }
    public function getImage06()
    {
        return ($this->image_06) ? '/uploads/' . $this->image_06 : '/no-image.png';
    }
    public function deleteImage06()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_06);
    }
    public function saveImage07($filename)
    {
        $this->image_07 = $filename;
        return $this->save(false);
    }
    public function getImage07()
    {
        return ($this->image_07) ? '/uploads/' . $this->image_07 : '/no-image.png';
    }
    public function deleteImage07()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_07);
    }
    public function saveImage08($filename)
    {
        $this->image_08 = $filename;
        return $this->save(false);
    }
    public function getImage08()
    {
        return ($this->image_08) ? '/uploads/' . $this->image_08 : '/no-image.png';
    }
    public function deleteImage08()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_08);
    }
    public function saveImage09($filename)
    {
        $this->image_09 = $filename;
        return $this->save(false);
    }
    public function getImage09()
    {
        return ($this->image_09) ? '/uploads/' . $this->image_09 : '/no-image.png';
    }
    public function deleteImage09()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_09);
    }
    public function saveImage10($filename)
    {
        $this->image_10 = $filename;
        return $this->save(false);
    }
    public function getImage10()
    {
        return ($this->image_10) ? '/uploads/' . $this->image_10 : '/no-image.png';
    }
    public function deleteImage10()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_10);
    }
    public function saveImage11($filename)
    {
        $this->image_11 = $filename;
        return $this->save(false);
    }
    public function getImage11()
    {
        return ($this->image_11) ? '/uploads/' . $this->image_11 : '/no-image.png';
    }
    public function deleteImage11()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_11);
    }
    public function saveImage12($filename)
    {
        $this->image_12 = $filename;
        return $this->save(false);
    }
    public function getImage12()
    {
        return ($this->image_12) ? '/uploads/' . $this->image_12 : '/no-image.png';
    }
    public function deleteImage12()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_12);
    }
    public function saveImage13($filename)
    {
        $this->image_13 = $filename;
        return $this->save(false);
    }
    public function getImage13()
    {
        return ($this->image_13) ? '/uploads/' . $this->image_13 : '/no-image.png';
    }
    public function deleteImage13()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_13);
    }
    public function saveImage14($filename)
    {
        $this->image_14 = $filename;
        return $this->save(false);
    }
    public function getImage14()
    {
        return ($this->image_14) ? '/uploads/' . $this->image_14 : '/no-image.png';
    }
    public function deleteImage14()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_14);
    }
    public function saveImage15($filename)
    {
        $this->image_15 = $filename;
        return $this->save(false);
    }
    public function getImage15()
    {
        return ($this->image_15) ? '/uploads/' . $this->image_15 : '/no-image.png';
    }
    public function deleteImage15()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_15);
    }
    public function saveImage16($filename)
    {
        $this->image_16 = $filename;
        return $this->save(false);
    }
    public function getImage16()
    {
        return ($this->image_16) ? '/uploads/' . $this->image_16 : '/no-image.png';
    }
    public function deleteImage16()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_16);
    }
    public function saveImage17($filename)
    {
        $this->image_17 = $filename;
        return $this->save(false);
    }
    public function getImage17()
    {
        return ($this->image_17) ? '/uploads/' . $this->image_17 : '/no-image.png';
    }
    public function deleteImage17()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_17);
    }
    public function saveImage18($filename)
    {
        $this->image_18 = $filename;
        return $this->save(false);
    }
    public function getImage18()
    {
        return ($this->image_18) ? '/uploads/' . $this->image_18 : '/no-image.png';
    }
    public function deleteImage18()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_18);
    }
    public function saveImage19($filename)
    {
        $this->image_19 = $filename;
        return $this->save(false);
    }
    public function getImage19()
    {
        return ($this->image_19) ? '/uploads/' . $this->image_19 : '/no-image.png';
    }
    public function deleteImage19()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_19);
    }
    public function saveImage20($filename)
    {
        $this->image_20 = $filename;
        return $this->save(false);
    }
    public function getImage20()
    {
        return ($this->image_20) ? '/uploads/' . $this->image_20 : '/no-image.png';
    }
    public function deleteImage20()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_20);
    }
    public function saveImage21($filename)
    {
        $this->image_21 = $filename;
        return $this->save(false);
    }
    public function getImage21()
    {
        return ($this->image_21) ? '/uploads/' . $this->image_21 : '/no-image.png';
    }
    public function deleteImage21()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image_21);
    }
    public static function getPhotos()
    {
        return Albums::find()->limit(9)->all();
    }
    public static function getShots()
    {
        return Albums::find()->all();
    }
}
