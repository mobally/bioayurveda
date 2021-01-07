<?php
namespace Eighteentech\Certificate\Block\Adminhtml\Certificate\Edit\Tab;

/**
 * @SuppressWarnings(PHPMD.DepthOfInheritance)
 */
class Image extends \Magento\Backend\Block\Widget\Form\Generic implements
    \Magento\Backend\Block\Widget\Tab\TabInterface
{

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        array $data = []
    ) {
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Initialise form fields
     *
     * @return $this
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(['data' => ['html_id_prefix' => 'certificate_image_']]);

        $model = $this->_coreRegistry->registry('certificate');

        /*
         * Checking if user have permissions to save information
         */
        if ($this->_isAllowedAction('Eighteentech_Certificate::certificate_manage')) {
            $isElementDisabled = false;
        } else {
            $isElementDisabled = true;
        }
        
        $layoutFieldset = $form->addFieldset(
            'image_fieldset',
            ['legend' => __('Image Thumbnail'), 'class' => 'fieldset-wide', 'disabled' => $isElementDisabled]
        );

        $layoutFieldset->addField(
            'image',
            'image',
            [
                'name' => 'image',
                'label' => __('Image'),
                'title' => __('Image'),
                'required'  => false,
                'disabled' => $isElementDisabled
            ]
        );

        $this->_eventManager->dispatch('adminhtml_certificate_edit_tab_image_prepare_form', ['form' => $form]);
        $certificateData = array();
        if(count($model->getData())){
			$certificateData = $model->getData();
			$certificateData['image'] = 'certificate/'.$certificateData['image'];
		}

        $form->setValues($certificateData);

        $this->setForm($form);

        return parent::_prepareForm();
    }

    /**
     * Prepare label for tab
     *
     * @return string
     */
    public function getTabLabel()
    {
        return __('Image Thumbnail');
    }

    /**
     * Prepare title for tab
     *
     * @return string
     */
    public function getTabTitle()
    {
        return __('Image Thumbnail');
    }

    /**
     * {@inheritdoc}
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden()
    {
        return false;
    }

    /**
     * Check permission for passed action
     *
     * @param string $resourceId
     * @return bool
     */
    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
    
    /**
     * Return predefined additional element types
     *
     * @return array
     */
    protected function _getAdditionalElementTypes()
    {
        return ['image' => 'Eighteentech\Certificate\Block\Adminhtml\Form\Element\Image'];
    }
}
