<?php
require_once(PATH_tslib.'class.tslib_content.php');

class tx_mmdamfilelist_realurl  {
		var $table	= 'tx_dam_cat';
		var $prefix = 'category:';
		
        function main($params, $ref)    {
				//t3lib_div::debug($params,'$params');
				
                if ($params['decodeAlias'])     {

                        return $this->alias2id($params['value']);

                } else {

                        return $this->id2alias($params['value']);

                }

        }

        function id2alias($value)       {

                if(strstr($value,$this->prefix) != false) {
                	list(,$uid) = explode(':',$value);
                	
                	$where = "uid='$uid'" . tslib_cObj::enableFields($this->table);
                	//t3lib_div::debug($where,'where');
                	
                	$result = $GLOBALS['TYPO3_DB']->exec_SELECTquery('uid,title',$this->table,$where);
                	//t3lib_div::debug($result,'$result');
                	if($result) {
                		$record = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result);
                		return $this->prepareAlias($uid,$record['title']); 	
                	} 
                	
                } 
                
                return $value;

        }

        function alias2id($value) {
        		//t3lib_div::debug($where,'where');
                if (preg_match('/.*__([0-9]+)$/',$value,$reg)) {
                    return $this->prefix . $reg[1];
                }
                return $value;
        }
        
		function prepareAlias($uid,$title) {
			$alias = strtolower(str_replace(' ','_',$title));
			$alias = urlencode($alias);
			$alias .= '__' . $uid;
			
			return $alias;
		}
}
?>