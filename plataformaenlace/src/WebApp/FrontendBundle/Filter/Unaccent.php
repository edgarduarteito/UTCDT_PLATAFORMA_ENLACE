<?php
namespace WebApp\FrontendBundle\Filter;

use Doctrine\ORM\Query\Lexer;

class Unaccent  extends \Doctrine\ORM\Query\AST\Functions\FunctionNode
{
    public $simpleStringExpression;

    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker)
    {
        return "translate(" . $sqlWalker->walkStringPrimary(
            $this->simpleStringExpression
        ) . ", 'áéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ','aeiouAEIOUaeiouAEIOUaeiouAEIOU')";
    }

    public function parse(\Doctrine\ORM\Query\Parser $parser)
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);

        $this->simpleStringExpression = $parser->StringPrimary();

        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}