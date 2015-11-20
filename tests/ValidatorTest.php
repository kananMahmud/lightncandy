<?php
/**
 * Generated by build/gen_test
 */
use LightnCandy\LightnCandy;
use LightnCandy\Runtime;

class ValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LightnCandy\Validator::delimiter
     */
    public function testOn_delimiter() {
        $method = new \ReflectionMethod('LightnCandy\Validator', 'delimiter');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invokeArgs(null,array(
            array_fill(0, 11, ''), array()
)        ));
        $this->assertEquals(null, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '{{', '#', '...', '}}'), array()
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '{', '#', '...', '}'), array()
)        ));
    }
    /**
     * @covers LightnCandy\Validator::operator
     */
    public function testOn_operator() {
        $method = new \ReflectionMethod('LightnCandy\Validator', 'operator');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invokeArgs(null,array(
            '', array(), array()
)        ));
        $this->assertEquals(2, $method->invokeArgs(null,array(
            '^', array('usedFeature' => array('isec' => 1), 'level' => 0, 'currentToken' => array(0,0,0,0,0,0,0,0), 'flags' => array('spvar' => 0)), array(array('foo'))
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            '/', array('stack' => array('[with]', '#'), 'level' => 1, 'currentToken' => array(0,0,0,0,0,0,0,'with'), 'flags' => array('with' => 1)), array(array())
)        ));
        $this->assertEquals(4, $method->invokeArgs(null,array(
            '#', array('usedFeature' => array('sec' => 3), 'level' => 0, 'currentToken' => array(0,0,0,0,0,0,0,0), 'flags' => array('spvar' => 0)), array(array('x'))
)        ));
        $this->assertEquals(5, $method->invokeArgs(null,array(
            '#', array('usedFeature' => array('if' => 4), 'level' => 0, 'currentToken' => array(0,0,0,0,0,0,0,0), 'flags' => array('spvar' => 0)), array(array('if'))
)        ));
        $this->assertEquals(6, $method->invokeArgs(null,array(
            '#', array('usedFeature' => array('with' => 5), 'level' => 0, 'flags' => array('with' => 1, 'runpart' => 0, 'spvar' => 0), 'currentToken' => array(0,0,0,0,0,0,0,0)), array(array('with'))
)        ));
        $this->assertEquals(7, $method->invokeArgs(null,array(
            '#', array('usedFeature' => array('each' => 6), 'level' => 0, 'currentToken' => array(0,0,0,0,0,0,0,0), 'flags' => array('spvar' => 0)), array(array('each'))
)        ));
        $this->assertEquals(8, $method->invokeArgs(null,array(
            '#', array('usedFeature' => array('unless' => 7), 'level' => 0, 'currentToken' => array(0,0,0,0,0,0,0,0), 'flags' => array('spvar' => 0)), array(array('unless'))
)        ));
        $this->assertEquals(9, $method->invokeArgs(null,array(
            '#', array('blockhelpers' => array('abc' => ''), 'usedFeature' => array('bhelper' => 8), 'level' => 0, 'currentToken' => array(0,0,0,0,0,0,0,0), 'flags' => array('spvar' => 0)), array(array('abc'))
)        ));
        $this->assertEquals(11, $method->invokeArgs(null,array(
            '#', array('hbhelpers' => array('abc' => ''), 'usedFeature' => array('hbhelper' => 10), 'level' => 0, 'currentToken' => array(0,0,0,0,0,0,0,0), 'flags' => array('spvar' => 0)), array(array('abc'))
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            '>', array('basedir' => array('.'), 'fileext' => array('.tmpl'), 'usedFeature' => array('unless' => 7, 'partial' => 7), 'level' => 0, 'flags' => array('skippartial' => 0, 'runpart' => 0, 'spvar' => 0), 'currentToken' => array(0,0,0,0,0,0,0,0)), array('test')
)        ));
    }
}
?>