<?php
namespace DluTwBootstrap\Form;

/**
 * DemoHorizontal Form
 * @package DluTwBootstrap
 * @copyright David Lukas (c) - http://www.zfdaily.com
 * @license http://www.zfdaily.com/code/license New BSD License
 * @link http://www.zfdaily.com
 * @link https://bitbucket.org/dlu/dlutwbootstrap
 */
class DemoHorizontal extends Horizontal
{
    /**
     * Init form
     */
    public function init() {
        $this->setName('horizontalForm');
        $this->setLegend('Horizontal Form Demo');
        $this->setAttrib('id', 'horizontal-form-demo');

        $this->addElement('hidden', 'id2', array(
            'filters'   => array(
                'int',
            )
        ));

        $this->addElement('text', 'name2', array(
            'label'             => 'Name',
            'placeholderText'   => 'Your name',
            'inlineHelp'        => 'Use your real name',
            'description'       => 'Text element (required) in error state with error messages. Supports inline help as well as placeholder text.',
            'required'          => true,
            'filters'           => array(
                'stripTags', 'stringTrim'
            ),
        ));

        $this->addElement('password', 'pwd2', array(
            'label'             => 'Password',
            'placeholderText'   => 'Top secret!',
            'inlineHelp'        => 'Do not tell anyone!',
            'description'       => 'Password element (required).  Supports inline help as well as placeholder text.',
            'required'  => true,
            'filters'   => array(
                'stripTags', 'stringTrim'
            ),
        ));

        $this->addElement('textarea', 'notes2', array(
            'label'             => 'Notes',
            'placeholderText'   => 'Type any notes here',
            'inlineHelp'        => 'A place for your notes',
            'description'       => 'Textarea element.  Supports inline help as well as placeholder text.',
            'rows'              => 4,
            'required'  => false,
            'filters'   => array(
                'stringTrim',
            ),
        ));

        $this->addElement('checkbox', 'pastaEater2', array(
            'label'             => 'Do you like pasta?',
            'description'       => 'Checkbox element.',
            'required'  => false,
        ));

        $this->addElement('radio', 'yourLevel2', array(
            'label'             => 'Your level',
            'description'       => 'Radio element (required).',
            'required'          => true,
            'multiOptions'      => array(
                'beg'   => 'Beginner',
                'int'   => 'Intermediate',
                'adv'   => 'Advanced',
                'gur'   => 'Guru',
            ),
        ));

        $this->addElement('radio', 'rateUs2', array(
            'label'             => 'Rate us',
            'description'       => 'Radio element inline (required).',
            'inline'            => true,
            'required'          => true,
            'multiOptions'      => array(
                'a'   => 'A',
                'b'   => 'B',
                'c'   => 'C',
                'd'   => 'D',
                'e'   => 'E',
                'f'   => 'F',
            ),
        ));

        $this->addElement('multicheckbox', 'settings2', array(
            'label'             => 'Settings',
            'description'       => 'Multicheckbox element.',
            'multiOptions'      => array(
                'runBkg'   => 'Run on background',
                'col'      => 'Use web colour palette',
                'slow'     => 'Compensate for slow connection',
                'stat'     => 'Collect statistics',
            ),
        ));

        $this->addElement('multicheckbox', 'seenMovies2', array(
            'label'             => 'What have you seen?',
            'description'       => 'Multicheckbox element inline.',
            'inline'            => true,
            'multiOptions'      => array(
                'terminator'    => 'Terminator 1',
                'eraser'        => 'Eraserhead',
                'amBeauty'      => 'American Beauty',
                'platoon'       => 'Platoon',
            ),
        ));

        $this->addElement('select', 'car2', array(
            'label'     => 'Make of your car',
            'inlineHelp'    => 'What car do you drive?',
            'description'   => 'Select element. Supports inline help.',
            'multiOptions'      => array(
                'ford'    => 'Ford',
                'bmw'     => 'BMW',
                'renault' => 'Renault',
                'jag'     => 'Jaguar',
                'other'    => 'other',
            ),
            'class'     => 'span2',
        ));

        $this->addElement('multiselect', 'pets2', array(
            'label'     => 'Your home creatures',
            'inlineHelp'    => 'Select all that apply',
            'description'   => 'Multiselect element. Supports inline help.',
            'multiOptions'      => array(
                'dog'    => 'Dog',
                'cat'     => 'Cat',
                'parrot' => 'Parrot',
                'fish'     => 'Fish',
                'rat'    => 'Rat',
                'other' => 'other',
            ),
            'class'     => 'span2',
        ));

        $this->addElement('file', 'attachment2', array(
            'label'             => 'Attach file',
            'inlineHelp'        => 'Max. file size 1 MB',
            'description'       => 'File element. Supports inline help.',
            'required'          => false,
            'filters'           => array(
                'stringTrim',
            ),
        ));

        $this->addElement('text', 'salary2', array(
            'label'             => 'Salary',
            'placeholderText'   => 'Good old cash...',
            'inlineHelp'        => 'Yearly net salary',
            'description'       => 'Text element with prepend and append text. Renders correctly on horizontal and inline forms.',
            'prependText'       => '$',
            'appendText'        => '.00',
        ));

        $this->addElement('hash', 'myHash2', array(
            'salt'              => 'myUniqueSalt2',
        ));

        $this->addElement('submit', 'submitBtn2', array(
            'label'             => 'Save changes',
            'title'             => 'Submit button',
        ));

        $this->addElement('reset', 'resetBtn2', array(
            'label'             => 'Clear form',
            'title'             => 'Reset button',
        ));

        $this->addElement('button', 'plainBtn2', array(
            'label'             => 'Other action',
            'title'             => 'Button',
        ));

        $this->addDisplayGroup(array('submitBtn2', 'resetBtn2', 'plainBtn2'),
                               'formActions',
                               array('displayGroupClass' => '\DluTwBootstrap\Form\DgFormActions'));
    }
}