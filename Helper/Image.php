<?php

namespace Dakzilla\Intervention\Helper;

/**
 * @method Image blur(integer $amount = 1)                                                                                                            Apply a gaussian blur filter with a optional amount on the current image. Use values between 0 and 100.
 * @method Image brightness(integer $level)                                                                                                           Changes the brightness of the current image by the given level. Use values between -100 for min. brightness. 0 for no change and +100 for max. brightness.
 * @method Image circle(integer $radius, integer $x, integer $y, \Closure $callback = null)                                                           Draw a circle at given x, y, coordinates with given radius. You can define the appearance of the circle by an optional closure callback.
 * @method Image colorize(integer $red, integer $green, integer $blue)                                                                                Change the RGB color values of the current image on the given channels red, green and blue. The input values are normalized so you have to include parameters from 100 for maximum color value. 0 for no change and -100 to take out all the certain color on the image.
 * @method Image contrast(integer $level)                                                                                                             Changes the contrast of the current image by the given level. Use values between -100 for min. contrast 0 for no change and +100 for max. contrast.
 * @method Image crop(integer $width, integer $height, integer $x = null, integer $y = null)                                                          Cut out a rectangular part of the current image with given width and height. Define optional x, y coordinates to move the top-left corner of the cutout to a certain position.
 * @method Image ellipse(integer $width, integer $height, integer $x, integer $y, \Closure $callback = null)                                          Draw a colored ellipse at given x, y, coordinates. You can define width and height and set the appearance of the circle by an optional closure callback.
 * @method Image fill(mixed $filling, integer $x = null, integer $y = null)                                                                           Fill current image with given color or another image used as tile for filling. Pass optional x, y coordinates to start at a certain point.
 * @method Image flip(string $mode = 'h')                                                                                                             Mirror the current image horizontally or vertically by specifying the mode.
 * @method Image fit(integer $width, integer $height = null, \Closure $callback = null, string $position = 'center')                                  Combine cropping and resizing to format image in a smart way. The method will find the best fitting aspect ratio of your given width and height on the current image automatically, cut it out and resize it to the given dimension. You may pass an optional Closure callback as third parameter, to prevent possible upsizing and a custom position of the cutout as fourth parameter.
 * @method Image gamma(float $correction)                                                                                                             Performs a gamma correction operation on the current image.
 * @method Image greyscale()                                                                                                                          Turns image into a greyscale version.
 * @method Image heighten(integer $height, \Closure $callback = null)                                                                                 Resizes the current image to new height, constraining aspect ratio. Pass an optional Closure callback as third parameter, to apply additional constraints like preventing possible upsizing.
 * @method Image insert(mixed $source, string $position = 'top-left', integer $x = 0, integer $y = 0)                                                 Paste a given image source over the current image with an optional position and a offset coordinate. This method can be used to apply another image as watermark because the transparency values are maintained.
 * @method Image interlace(boolean $interlace = true)                                                                                                 Determine whether an image should be encoded in interlaced or standard mode by toggling interlace mode with a boolean parameter. If an JPEG image is set interlaced the image will be processed as a progressive JPEG.
 * @method Image invert()                                                                                                                             Reverses all colors of the current image.
 * @method Image limitColors(integer $count, mixed $matte = null)                                                                                     Method converts the existing colors of the current image into a color table with a given maximum count of colors. The function preserves as much alpha channel information as possible and blends transarent pixels against a optional matte color.
 * @method Image line(integer $x1, integer $y1, integer $x2, integer $y2, \Closure $callback = null)                                                  Draw a line from x, y point 1 to x, y point 2 on current image. Define color and / or width of line in an optional Closure callback.
 * @method Image mask(mixed $source, boolean $mask_with_alpha)                                                                                        Apply a given image source as alpha mask to the current image to change current opacity. Mask will be resized to the current image size. By default a greyscale version of the mask is converted to alpha values, but you can set mask_with_alpha to apply the actual alpha channel. Any transparency values of the current image will be maintained.
 * @method Image opacity(integer $transparency)                                                                                                       Set the opacity in percent of the current image ranging from 100% for opaque and 0% for full transparency.
 * @method Image orientate()                                                                                                                          This method reads the EXIF image profile setting 'Orientation' and performs a rotation on the image to display the image correctly.
 * @method Image pixel(mixed $color, integer $x, integer $y)                                                                                          Draw a single pixel in given color on x, y position.
 * @method Image pixelate(integer $size)                                                                                                              Applies a pixelation effect to the current image with a given size of pixels.
 * @method Image polygon(array $points, \Closure $callback = null)                                                                                    Draw a colored polygon with given points. You can define the appearance of the polygon by an optional closure callback.
 * @method Image rectangle(integer $x1, integer $y1, integer $x2, integer $y2, \Closure $callback = null)                                             Draw a colored rectangle on current image with top-left corner on x, y point 1 and bottom-right corner at x, y point 2. Define the overall appearance of the shape by passing a Closure callback as an optional parameter.
 * @method Image resize(integer $width, integer $height, \Closure $callback = null)                                                                   Resizes current image based on given width and / or height. To contraint the resize command, pass an optional Closure callback as third parameter.
 * @method Image resizeCanvas(integer $width, integer $height, string $anchor = 'center', boolean $relative = false, string $bgcolor = '#000000')     Resize the boundaries of the current image to given width and height. An anchor can be defined to determine from what point of the image the resizing is going to happen. Set the mode to relative to add or subtract the given width or height to the actual image dimensions. You can also pass a background color for the emerging area of the image.
 * @method Image rotate(float $angle, string $bgcolor = '#000000')                                                                                    Rotate the current image counter-clockwise by a given angle. Optionally define a background color for the uncovered zone after the rotation.
 * @method Image sharpen(integer $amount = 10)                                                                                                        Sharpen current image with an optional amount. Use values between 0 and 100.
 * @method Image text(string $text, integer $x = 0, integer $y = 0, \Closure $callback = null)                                                        Write a text string to the current image at an optional x, y basepoint position. You can define more details like font-size, font-file and alignment via a callback as the fourth parameter.
 * @method Image trim(string $base = 'top-left', array $away = array('top', 'bottom', 'left', 'right'), integer $tolerance = 0, integer $feather = 0) Trim away image space in given color. Define an optional base to pick a color at a certain position and borders that should be trimmed away. You can also set an optional tolerance level, to trim similar colors and add a feathering border around the trimed image.
 * @method Image widen(integer $width, \Closure $callback = null)                                                                                     Resizes the current image to new width, constraining aspect ratio. Pass an optional Closure callback as third parameter, to apply additional constraints like preventing possible upsizing. Build PSR-7 compatible ResponseInterface with current image in given format and quality.
 */

class Image extends \Magento\Framework\App\Helper\AbstractHelper
{
    const CACHE_FOLDER_XML_PATH = 'dakzilla/intervention/cache_folder';
    const DEFAULT_QUALITY = 100;

    /** @var string */
    protected $_mediaPath;

    /** @var string */
    protected $_mediaUrl;

    /** @var array */
    protected $_commandQueue = [];

    /** @var int */
    protected $_quality;

    /** @var string */
    protected $_originalImagePath;

    /** @var \Intervention\Image\Image */
    protected $_image;

    /** @var \Intervention\Image\ImageManager */
    protected $_imageManager;

    /** @var \SuperClosure\Serializer */
    protected $_closureSerializer;

    /** @var \Magento\Framework\Filesystem\Directory\ReadInterface */
    protected $_mediaDirectoryRead;

    /** @var \Magento\Framework\Filesystem\Directory\WriteInterface */
    protected $_mediaDirectoryWrite;

    /** @var \Magento\Store\Model\StoreManagerInterface */
    protected $_storeManager;

    /** @var \Magento\Framework\App\Filesystem\DirectoryList */
    protected $_directoryList;

    /** @var \Magento\Framework\Filesystem */
    protected $_fileSystem;

    /** @var array */
    protected $_unavailableMethods = [
        'backup',
        'cache',
        'canvas',
        'destroy',
        'encode',
        'exif',
        'filesize',
        'getCore',
        'iptc',
        'make',
        'mime',
        'pickColor',
        'psrResponse',
        'reset',
        'response',
        'save',
        'stream'
    ];

    /**
     * Image constructor.
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Framework\App\Filesystem\DirectoryList $directoryList
     * @param \Magento\Framework\Filesystem $filesystem
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Filesystem\DirectoryList $directoryList,
        \Magento\Framework\Filesystem $filesystem,
        \Magento\Framework\App\Helper\Context $context,
        \Intervention\Image\ImageManager $imageManager,
        \SuperClosure\Serializer $closureSerializer
    )
    {
        $this->_storeManager = $storeManager;
        $this->_directoryList = $directoryList;
        $this->_fileSystem = $filesystem;
        $this->_closureSerializer = $closureSerializer;
        $this->_imageManager = $imageManager;

        parent::__construct($context);
    }

    /**
     * Queue calls to Intervention Image
     * @param $name
     * @param $arguments
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function __call($name, $arguments)
    {
        if (!in_array($name, $this->_unavailableMethods) && !in_array($name, get_class_methods($this))) {
            $this->_commandQueue[] = compact('name', 'arguments');
        }

        return $this;
    }

    /**
     * Returns the URL to the transformed image file after applying call queue
     * @return null|string
     */
    public function get()
    {
        if ($this->_originalImagePath) {
            return $this->_getCachedImage();
        }

        return null;
    }

    /**
     * Set quality for the encoded images
     * @param int $quality
     * @return $this
     */
    public function setQuality(int $quality)
    {
        $this->_quality = $quality;

        return $this;
    }

    /**
     * Resolve an absolute path to the original image file from the argument
     * @param string $imagePath
     * @return $this
     */
    public function make(string $imagePath)
    {
        $this->_resetImage();

        if (filter_var($imagePath, FILTER_VALIDATE_URL)) {
            $imagePath = str_replace($this->_getMediaUrl(), '', $imagePath);
        }

        $absoluteImagePath = $this->_getMediaDirectoryRead()->getAbsolutePath($imagePath);

        if (is_file($absoluteImagePath)) {
            $this->_originalImagePath = $absoluteImagePath;
        }

        return $this;
    }

    /**
     * Returns URL to the cached image. If a cached image doesn't exist, it creates one and returns its URL.
     * @return string
     */
    protected function _getCachedImage()
    {

        if (!is_file($this->_getCachedFilePath())) {
            $this->_setCachedImage();
        }

        return $this->_getCachedFilePath(true);
    }

    /**
     * Applies call queue to the image and caches the image
     */
    protected function _setCachedImage()
    {
        $this->_image = $this->_imageManager->make($this->_originalImagePath);

        foreach ($this->_commandQueue as $command) {
            $this->_image = call_user_func_array([$this->_image, $command['name']], $command['arguments']);
        }

        $savePath = $this->_getCachedFilePath(false, true);
        $saveDirectory = dirname($this->_getCachedFilePath(false, true));
        $this->_getMediaDirectoryWrite()->create($saveDirectory);

        if ($this->_getCompressImages()) {
            $encodedImage = $this->_image->stream(null, $this->_getQuality())->getContents();
        } else {
            $encodedImage = $this->_image->stream()->getContents();
        }

        $this->_getMediaDirectoryWrite()->writeFile($savePath, $encodedImage);
    }

    /**
     * Returns the call queue as a stringified version
     * @return string
     */
    protected function _getArgumentString()
    {
        $argumentString = '';

        foreach ($this->_commandQueue as $command) {
            $argumentString .= $command['name'];
            foreach ($command['arguments'] as $key => $argument) {
                if (!$argument instanceof \Closure) {
                    $argumentString .= $key . $argument;
                } else {
                    $serializedClosure = $this->_closureSerializer->serialize($argument);
                    $argumentString .= $key . $serializedClosure;
                }
            }
        }

        if ($this->_getCompressImages()) {
            $argumentString .= $this->_getQuality();
        }

        return $argumentString;
    }

    /**
     * Returns the quality of the encoded image
     * @return int
     */
    protected function _getQuality()
    {
        return $this->_quality;
    }

    /**
     * Returns the relative path to the cache folder
     * @return mixed
     */
    protected function _getCacheFolder()
    {
        return $this->scopeConfig->getValue(self::CACHE_FOLDER_XML_PATH);
    }

    /**
     * Cache and return media directory write access
     * @return \Magento\Framework\Filesystem\Directory\WriteInterface
     */
    protected function _getMediaDirectoryWrite()
    {
        if (!$this->_mediaDirectoryWrite) {
            $this->_mediaDirectoryWrite = $this->_fileSystem->getDirectoryWrite(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA);
        }

        return $this->_mediaDirectoryWrite;
    }

    /**
     * Cache and return media directory read access
     * @return \Magento\Framework\Filesystem\Directory\ReadInterface
     */
    protected function _getMediaDirectoryRead()
    {
        if (!$this->_mediaDirectoryRead) {
            $this->_mediaDirectoryRead = $this->_fileSystem->getDirectoryRead(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA);
        }

        return $this->_mediaDirectoryRead;
    }

    /**
     * Cache and return media URL for the current store
     * @return string
     */
    protected function _getMediaUrl()
    {
        if (!$this->_mediaUrl) {
            $this->_mediaUrl = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        }

        return $this->_mediaUrl;
    }

    /**
     * Cache and return media path for the current store
     * @return string
     */
    protected function _getMediaPath()
    {
        if (!$this->_mediaPath) {
            $this->_mediaPath = $this->_directoryList->getPath(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA);
        }

        return $this->_mediaPath;
    }

    /**
     * Returns the file name only
     * @return string
     */
    private function _getFilename()
    {
        $pathSegments = explode('/', $this->_originalImagePath);

        return end($pathSegments);
    }

    /**
     * Returns a unique cache key for every argument combination in the call queue
     * @return string
     */
    private function _getUniqueHash()
    {
        return md5($this->_getArgumentString());
    }

    /**
     * @return string
     */
    private function _getSavePath()
    {
        return $this->_getCacheFolder() . $this->_getUniqueHash();
    }

    /**
     * Returns either an absolute path or a URL to a cached version of the current image
     * @param bool $fileUrl
     * @param bool $relative
     * @return string
     */
    private function _getCachedFilePath($fileUrl = false, $relative = false)
    {
        return ($relative ? '' : ($fileUrl ? $this->_getMediaUrl() : $this->_getMediaPath() . '/')) . $this->_getSavePath() . '/' . $this->_getFilename();
    }

    /**
     * Resets the image and call queue
     */
    private function _resetImage()
    {
        $this->_commandQueue = [];
        $this->_originalImagePath = null;
        $this->_image = null;
        $this->setQuality(self::DEFAULT_QUALITY);
    }

    /**
     * @return bool
     */
    private function _getCompressImages()
    {
        return $this->_getQuality() < self::DEFAULT_QUALITY;
    }
}