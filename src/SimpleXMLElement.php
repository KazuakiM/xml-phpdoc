<?php

/**
 * SimpleXMLElement
 *
 * @see http://php.net/manual/en/class.simplexmlelement.php
 */
class SimpleXMLElement
{
    /**
     * __construct
     *
     * Creates a new SimpleXMLElement object
     *
     * @param string $data
     * @param int    $options = 0
     * @param bool   $data_is_url = false
     * @param string $ns = ""
     * @param bool   $is_prefix = false
     *
     * @see http://php.net/manual/en/simplexmlelement.construct.php
     */
    public function __construct(string $data, int $options = 0, bool $data_is_url = false, string $ns = "", bool $is_prefix = false)
    {
    }

    /**
     * addAttribute
     *
     * Adds an attribute to the SimpleXML element
     *
     * @param string $name
     * @param string $value     (optional)
     * @param string $namespace (optional)
     *
     * @see http://php.net/manual/en/simplexmlelement.addattribute.php
     */
    public function addAttribute(string $name, string $value, string $namespace):void
    {
    }

    /**
     * addChild
     *
     * Adds a child element to the XML node
     *
     * @param string $name
     * @param string $value     (optional)
     * @param string $namespace (optional)
     *
     * @see http://php.net/manual/en/simplexmlelement.addchild.php
     */
    public function addChild(string $name, string $value, string $namespace):SimpleXMLElement
    {
    }

    /**
     * asXML
     *
     * Return a well-formed XML string based on SimpleXML element
     *
     * @param string $filename (optional)
     *
     * @see http://php.net/manual/en/simplexmlelement.asxml.php
     */
    public function asXML(string $filename):mixed
    {
    }

    /**
     * attributes
     *
     * Identifies an element's attributes
     *
     * @param string $ns = NULL
     * @param bool   $is_prefix = false
     *
     * @see http://php.net/manual/en/simplexmlelement.attributes.php
     */
    public function attributes(string $ns = null, bool $is_prefix = false):SimpleXMLElement
    {
    }

    /**
     * children
     *
     * Finds children of given node
     *
     * @param string $ns                (optional)
     * @param bool   $is_prefix = false (optional)
     *
     * @see http://php.net/manual/en/simplexmlelement.children.php
     */
    public function children(string $ns, bool $is_prefix = false):SimpleXMLElement
    {
    }

    /**
     * count
     *
     * Counts the children of an element
     *
     * @see http://php.net/manual/en/simplexmlelement.count.php
     */
    public function count():int
    {
    }

    /**
     * getDocNamespaces
     *
     * Returns namespaces declared in document
     *
     * @param bool $recursive = false
     * @param bool $from_root = true
     *
     * @see http://php.net/manual/en/simplexmlelement.getdocnamespaces.php
     */
    public function getDocNamespaces(bool $recursive = false, bool $from_root = true):array
    {
    }

    /**
     * getName
     *
     * Gets the name of the XML element
     *
     * @see http://php.net/manual/en/simplexmlelement.getname.php
     */
    public function getName():string
    {
    }

    /**
     * getNamespaces
     *
     * Returns namespaces used in document
     *
     * @param bool $recursive = false
     *
     * @see http://php.net/manual/en/simplexmlelement.getnamespaces.php
     */
    public function getNamespaces(bool $recursive = false):array
    {
    }

    /**
     * registerXPathNamespace
     *
     * Creates a prefix/ns context for the next XPath query
     *
     * @param string $prefix
     * @param string $ns
     *
     * @see http://php.net/manual/en/simplexmlelement.registerxpathnamespace.php
     */
    public function registerXPathNamespace(string $prefix, string $ns):bool
    {
    }

    /**
     * saveXML
     *
     * @alias asXML()
     *
     * @see http://php.net/manual/en/simplexmlelement.savexml.php
     */
    public function saveXML(string $filename):mixed
    {
    }

   /**
    * __toString
    *
    * Returns the string content
    *
    * @see http://php.net/manual/en/simplexmlelement.tostring.php
    */
    public function __toString():string
    {
    }

    /**
     * xpath
     *
     * Runs XPath query on XML data
     *
     * @param string $path
     *
     * @see http://php.net/manual/en/simplexmlelement.xpath.php
     */
    public function xpath(string $path):array
    {
    }
}