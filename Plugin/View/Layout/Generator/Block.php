<?php

namespace Dakzilla\Intervention\Plugin\View\Layout\Generator;

class Block
{

    /** @var \Dakzilla\Intervention\Helper\Image */
    protected $_imageHelper;

    /**
     * Block constructor.
     * @param \Dakzilla\Intervention\Helper\Image $image
     */
    public function __construct(
        \Dakzilla\Intervention\Helper\Image $image
    )
    {
        $this->_imageHelper = $image;
    }

    /**
     * @param $subject
     * @param $result
     * @return mixed
     */
    public function afterCreateBlock($subject, $result)
    {
        if ($result instanceof \Magento\Framework\View\Element\Template) {
            $result->addData(['image_helper' => $this->_imageHelper]);
        }

        return $result;
    }
}