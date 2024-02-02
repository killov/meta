<?php
namespace Skrz\Meta\XML;

/**
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 *
 * @Annotation
 */
final class XmlValue implements XmlAnnotationInterface
{

	/** @var string */
	public $group = XmlElement::DEFAULT_GROUP;


	/** @var bool */
	public $isCData = false;

	/**
	 * @return string
	 */
	public function getGroup()
	{
		return $this->group;
	}

}
