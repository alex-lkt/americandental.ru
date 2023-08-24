/* eslint-disable */
this.BX = this.BX || {};
this.BX.UI = this.BX.UI || {};
(function (exports,main_core) {
	'use strict';

	class AstProcessor {
	  /**
	   * Makes flat list from AST
	   */
	  static flattenAst(ast) {
	    if (ast && ast.getChildren) {
	      const children = ast.getChildren();
	      return [...children, ...children.flatMap(node => {
	        return AstProcessor.flattenAst(node);
	      })];
	    }
	    return [];
	  }

	  /**
	   * Parses selector
	   */
	  static parseSelector(selector) {
	    const regex = /(\w+)\[(.*?)]|\s*(>)\s*|\w+/g;
	    const matches = [...selector.matchAll(regex)];
	    return matches.map(([fullMatch, nodeName, rawProps, arrow]) => {
	      if (arrow) {
	        return '>';
	      }
	      if (rawProps) {
	        const propsRegexp = /(\w+)=["'](.*?)["']/g;
	        const propsMatches = [...rawProps.matchAll(propsRegexp)];
	        const props = propsMatches.map(([, key, value]) => {
	          return [key, value];
	        });
	        return {
	          nodeName,
	          props
	        };
	      }
	      return {
	        nodeName: fullMatch,
	        props: []
	      };
	    });
	  }

	  /**
	   * @private
	   */
	  static matchesNodeWithSelector(node, selector) {
	    if (node && node.constructor.name === selector.nodeName) {
	      if (selector.props.length > 0) {
	        return selector.props.every(([key, value]) => {
	          return node[key] === value;
	        });
	      }
	      return true;
	    }
	    return false;
	  }

	  /**
	   * Finds parent node by parsed selector
	   */
	  static findParentNode(node, selector) {
	    if (node) {
	      const parent = node.getParent();
	      if (AstProcessor.matchesNodeWithSelector(parent, selector)) {
	        return parent;
	      }
	      return AstProcessor.findParentNode(parent, selector);
	    }
	    return null;
	  }

	  /**
	   * Find elements by selector
	   */
	  static findElements(ast, selector) {
	    const flattenedAst = AstProcessor.flattenAst(ast);
	    const parsedSelector = AstProcessor.parseSelector(selector);
	    const lastSelector = parsedSelector.at(-1);
	    let checkClosestParent = false;
	    return parsedSelector.reduceRight((acc, currentSelector) => {
	      if (main_core.Type.isPlainObject(currentSelector)) {
	        if (currentSelector === lastSelector) {
	          return acc.filter(node => {
	            return AstProcessor.matchesNodeWithSelector(node, currentSelector);
	          });
	        }
	        if (checkClosestParent) {
	          checkClosestParent = false;
	          return acc.filter(node => {
	            return AstProcessor.matchesNodeWithSelector(node.getParent(), currentSelector);
	          });
	        }
	        return acc.filter(node => {
	          return AstProcessor.findParentNode(node, currentSelector) !== null;
	        });
	      }
	      if (currentSelector === '>') {
	        checkClosestParent = true;
	      }
	      return acc;
	    }, flattenedAst);
	  }

	  /**
	   * Reduces AST
	   */
	  static reduceAst(ast, reducer) {
	    const children = ast.getChildren == null ? void 0 : ast.getChildren().reduce((acc, child) => {
	      const preparedChild = [AstProcessor.reduceAst(child, reducer)].flat();
	      if (!main_core.Type.isNil(preparedChild)) {
	        acc.replaceChild(child, ...preparedChild);
	      }
	      return acc;
	    }, ast);
	    return reducer(ast, children);
	  }
	}

	exports.AstProcessor = AstProcessor;

}((this.BX.UI.Bbcode = this.BX.UI.Bbcode || {}),BX));
//# sourceMappingURL=ast-processor.bundle.js.map
