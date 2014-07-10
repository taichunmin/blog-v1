<?php

class SkillsController extends \BaseController {

	protected $skills = [
		'web' => [
			'name' => '<span class="glyphicon glyphicon-globe"></span>&nbsp; 網頁程式',
			'data' => [
				['PHP'        ,3],
				['HTML'       ,3],
				['MySQL'      ,3],
				['jQuery'     ,3],
				['JavaScript' ,2],
				['CSS'        ,2],
				['JSP'        ,1],
			],
		],
		'server' => [
			'name' => '<span class="glyphicon glyphicon-hdd"></span>&nbsp; 伺服器',
			'data' => [
				['Apache httpd' ,3],
				['CentOS'       ,3],
				['Nginx'        ,2],
				['MySQL daemon' ,3],
			],
		],
		'programing' => [
			'name' => '<span class="glyphicon glyphicon-floppy-saved"></span>&nbsp; 程式語言',
			'data' => [
				['C++'           ,3],
				['C'             ,3],
				['Java'          ,2],
				['Python 3'      ,2],
				['OpenGL'        ,1],
				['Android'       ,1],
				['Bash'          ,1],
				['Visual Basic 6',1],
			],
		],
	];

	/**
	 * Show Skills progress bar.
	 *
	 * @return View
	 */
	public function getIndex()
	{
		$this->skills = array_map( array($this,'sortSkill'), $this->skills );
		@$contentLeft .= View::make('skills.pgbar', ['skill' => $this->skills['web']])->__toString();
		@$contentLeft .= View::make('skills.pgbar', ['skill' => $this->skills['server']])->__toString();
		@$contentRight .= View::make('skills.pgbar', ['skill' => $this->skills['programing']])->__toString();
		return View::make('skills.master', compact("contentLeft","contentRight"));
	}

	private function sortSkill( $skill )
	{
		if( empty($skill['name']) || empty($skill['data']) )
			return $skill;
		usort( $skill['data'], array($this, 'sortSkillCmp') );
		return $skill;
	}

	private function sortSkillCmp( $a, $b )
	{
		if( $a[1] != $b[1] )
			return $b[1] - $a[1];
		else return strcmp( strtolower($a[0]), strtolower($b[0]) );
	}

}
