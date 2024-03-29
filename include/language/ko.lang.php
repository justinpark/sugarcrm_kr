<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array (
//e.g. auf Deutsch 'Contacts'=>'Contakten',
  'language_pack_name' => 'Korean(한국어)',
  'moduleList' =>
  array (
    'Home' => '현황판',
    'Contacts' => '연락처 관리',
    'Accounts' => '거래처 관리',
    'Opportunities' => '영업기회 관리',
    'Cases' => '요청사례 관리',
    'Notes' => '메모 관리',
    'Calls' => '전화상담 관리',
    'Emails' => '메일 관리',
    'Meetings' => '미팅 관리',
    'Tasks' => '업무내역 관리',
    'Calendar' => '일정 관리',
      //BEGIN SUGARCRM flav!=sales ONLY
      'Leads' => '관심고객 관리',
      //END SUGARCRM flav!=sales ONLY
    'Currencies' => '화폐통화 관리',
      //BEGIN SUGARCRM flav=pro ONLY
      'Contracts'=>'계약 및 수주 관리',
      'Quotes' => '견적서 관리',
      'Products' => '상품 관리',
      'ProductCategories' => '상품분류 관리',
      'ProductTypes' => '상품종류 관리',
      'ProductTemplates' => '상품목록 관리',
      //END SUGARCRM flav=pro ONLY
      //BEGIN SUGARCRM flav=pro || flav=sales ONLY
      'Reports' => '보고서 관리',
      'Reports_1'=>'보고서 관리',
      //END SUGARCRM flav=pro || flav=sales ONLY
      //BEGIN SUGARCRM flav=pro ONLY
      'Forecasts' => 'Forecasts',
      'ForecastSchedule'=>'Forecast Schedule',
      'MergeRecords'=>'Merge Records',
      'Quotas' => 'Quotas',
      'Teams' => 'Teams',
      'TeamNotices' => 'Team Notices',
      'Manufacturers' => 'Manufacturers',
      //END SUGARCRM flav=pro ONLY
    'Activities' => '영업활동 관리',
      //BEGIN SUGARCRM flav!=sales ONLY
    'Bugs' => '결함 관리',
    'Feeds' => 'RSS',
    'iFrames'=>'내 사이트 관리',
    'TimePeriods'=>'Time Periods',
    'TaxRates'=>'세율 관리',
    'ContractTypes' => 'Contract Types',
    'Schedulers'=>'일정 관리',
    'Project'=>'프로젝트 관리',
    'ProjectTask'=>'프로젝트 활동내역',
    'Campaigns'=>'광고 및 메일발송관리',
    'CampaignLog'=>'광고 기록 관리',
    'Documents'=>'계약서및 문서 관리',
    'DocumentRevisions'=>'Document Revisions',
      //END SUGARCRM flav!=sales ONLY
    'Connectors'=>'Connectors',
    'Roles'=>'권한 관리',
      //BEGIN SUGARCRM flav=following ONLY
      'SugarFollowing'=>'SugarFollowing',
      //END SUGARCRM flav=following ONLY
    'Notifications'=>'Notifications',
    'Sync'=>'동기화',
      //BEGIN SUGARCRM flav=ent ONLY
      'ReportMaker' => 'Advanced Reports',
      'DataSets' => 'Data Formats',
      'CustomQueries' => 'Custom Queries',
      //END SUGARCRM flav=ent ONLY
      //BEGIN SUGARCRM flav=pro ONLY
      'WorkFlow' => 'Workflow Definitions',
      'EAPM' => 'External Accounts',
      //END SUGARCRM flav=pro ONLY
    'Users' => '사용자 관리',
    'Employees' => '직원 관리',
    'Administration' => '시스템관리자',
    'ACLRoles' => '권한 관리',
    'InboundEmail' => '받은편지함 관리',
    'Releases' => 'Releases',
    'Prospects' => '잠재고객 관리',
    'Queues' => 'Queues',
    'EmailMarketing' => '이메일 마케팅 관리',
    'EmailTemplates' => '이메일 템플릿 관리',
    'SNIP' => "이메일 보관함 관리",
      //BEGIN SUGARCRM flav!=sales ONLY
      'ProspectLists' => '잠재고객 대상 관리',
      //END SUGARCRM flav!=sales ONLY
    'SavedSearch' => '저장된 검색결과 관리',
    'UpgradeWizard' => '업그레이드 마법사',
    'Trackers' => '사용추',
    'TrackerPerfs' => 'Tracker Performance',
    'TrackerSessions' => 'Tracker Sessions',
    'TrackerQueries' => 'Tracker Queries',
    'FAQ' => '자주묻는질문',
    'Newsletters' => '뉴스레터 관리',
    'SugarFeed'=>'Sugar Feed',
    'KBDocuments' => '관련지식 관리',
  'SugarFavorites'=>'즐겨찾기 관리',
      //BEGIN SUGARCRM flav=dce ONLY
      'DCEDataBases' => 'Databases',
      'DCEClusters' => 'Clusters',
      'DCEInstances' => 'Instances',
      'DCETemplates' => 'Templates',
      'DCEActions' => 'Actions',
      'DCEReports'=>'DCE Reports',
      //END SUGARCRM flav=dce ONLY

    'OAuthKeys' => 'OAuth Consumer Keys',
    'OAuthTokens' => 'OAuth Tokens',
  ),

  'moduleListSingular' =>
  array (
    'Home' => '현황판',
      //BEGIN SUGARCRM flav!=sales ONLY
      'Dashboard' => '대쉬보드',
      //END SUGARCRM flav!=sales ONLY
    'Contacts' => '연락처',
    'Accounts' => '거래처',
    'Opportunities' => '영업기회',
    'Cases' => '요청사례',
    'Notes' => '메모',
    'Calls' => '전화상담내역',
    'Emails' => '이메일',
    'Meetings' => '미팅',
    'Tasks' => '업무내역',
    'Calendar' => '일정',
      //BEGIN SUGARCRM flav!=sales ONLY
      'Leads' => '관심고객',
      //END SUGARCRM flav!=sales ONLY
      //BEGIN SUGARCRM flav=pro ONLY
      'Contracts'=>'계약 및 수주',
      'Quotes' => '견적서',
      'Products' => '상품',
      'Reports' => '보고서',
      'Forecasts' => '예측보고',
      'ForecastSchedule'=>'Forecast Schedule',
      'Quotas' => 'Quota',
      'Teams' => 'Team',
      //END SUGARCRM flav=pro ONLY
    'Activities' => '활동내역',
      //BEGIN SUGARCRM flav!=sales ONLY
    'Bugs' => '오류 및 장애',
    'Feeds' => 'RSS',
    'iFrames'=>'My Sites',
    'TimePeriods'=>'기간 및 분기',
    'Project'=>'프로젝트',
    'ProjectTask'=>'프로젝트 활동내역',
    'Prospects' => 'Target',
    'Campaigns'=>'Campaign',
    'Documents'=>'Document',
      //END SUGARCRM flav!=sales ONLY
    'SugarFollowing'=>'SugarFollowing',
    'Sync'=>'Sync',
      //BEGIN SUGARCRM flav=ent ONLY
      'ReportMaker' => ' SweetReport',
      //END SUGARCRM flav=ent ONLY
      //BEGIN SUGARCRM flav=pro ONLY
      'WorkFlow' => 'Workflow',
      'EAPM' => 'External Account',
      //END SUGARCRM flav=pro ONLY
    'Users' => 'User',
  'SugarFavorites'=>'SugarFavorites'

        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'예',
    '2'=>'아니요',
  ),

  //e.g. en franï¿½ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
      'Customer' => '고객',
      'Competitor' => '경쟁사',
    'Analyst' => '애널리스트',
    'Integrator' => '시스템설계사',
    'Investor' => '투자자',
    'Partner' => '파트너',
    'Press' => '기자 및 출판사업자',
    'Prospect' => '잠재거래',
    'Reseller' => '재판매사업자',
    'Other' => '기타',
  ),
  //e.g. en espaï¿½ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
      'Construction' => '건설',
      'Utilities' => '공공사업',
      'Education' => '교육',
      'Finance' => '금융',
      'Retail' => '도소매',
      'Recreation' => '레크리에이션',
      'Shipping' => '배송',
      'Insurance' => '보험',
      'Hospitality' => '복지',
      'Machinery' => '부품',
      'Not For Profit' => '비영리',
      'Chemicals' => '석유화학',
      'Media' => '신문/방송',
      'Biotechnology' => '생명공학',
      'Engineering' => '엔지니어',
      'Entertainment' => '엔터테이먼트',
      'Transportation' => '운송',
      'Banking' => '은행',
      'Telecommunications' => '이동통신',
      'Healthcare' => '의료 및 보건',
      'Apparel' => '의류 및 패션',
      'Energy' => '자원',
      'Electronics' => '전자',
      'Communications' => '정보통신',
      'Government' => '정부',
      'Manufacturing' => '제조',
      'Technology' => '지식',
      'Consulting' => '컨설팅',
      'Environmental' => '환경',
      'Other' => '기타',
  ),
  'lead_source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => '방문판매',
    'Existing Customer' => '기존고객',
    'Self Generated' => '본인추천',
    'Employee' => '사원추천',
    'Partner' => '파트너',
    'Public Relations' => '광고 및 홍보',
    'Direct Mail' => 'DM 우편',
    'Conference' => '컨퍼런스',
    'Trade Show' => '전시회',
    'Web Site' => '웹사이트',
    'Word of mouth' => '입소문',
    'Email' => '이메일',
    'Campaign'=>'캠페인',
    'Other' => '기타',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => '기존 고객',
    'New Business' => '신규 고객',
  ),
    //sales: 매출, Quarter Revenue: 당기순이익
  'roi_type_dom' =>
    array (
    'Revenue' => '수익',
    'Investment'=>'투자',
    'Expected_Revenue'=>'예상 수익',
    'Budget'=>'예산',

  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => '최고 결정권자',
    'Business Decision Maker' => '사업 결정권자',
    'Business Evaluator' => '사업 평가자',
    'Technical Decision Maker' => '실무 결정권자',
    'Technical Evaluator' => '실무 평가자',
    'Executive Sponsor' => '고위 스폰서',
    'Influencer' => '고위간부 및 영향권자',
    'Other' => '기타',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => '주 담당자',
    'Alternate Contact' => '부 담당자',
  ),
  'payment_terms' =>
  array (
    '' => '',
    'Net 15' => '격주(달2회)',
    'Net 30' => '매달',
  ),
  'sales_stage_default_key' => 'Prospecting',
  'fts_type' => array (
      '' => '',
      'Elastic' => 'elasticsearch'
  ),
  'sales_stage_dom' =>
  array (
    'Prospecting' => '고객선별',
    'Qualification' => '선별완료',
    'Needs Analysis' => '수요분석',
    'Value Proposition' => '초기영업',
    'Id. Decision Makers' => '의사결정권자확인',
    'Perception Analysis' => '고객요구사항분석',
    'Proposal/Price Quote' => '제안및견적',
    'Negotiation/Review' => '최종교섭중',
    'Closed Won' => '계약성공',
    'Closed Lost' => '계약실패',
  ),
  'in_total_group_stages' => array (
    'Draft' => '초기제안',
    'Negotiation' => '제안및교섭',
    'Delivered' => '전달',
    'On Hold' => '대기',
    'Confirmed' => '확인',
    'Closed Accepted' => '계약성공',
    'Closed Lost' => '계약실패',
    'Closed Dead' => '계약만료',
  ),
  'sales_probability_dom' => // keys must be the same as sales_stage_dom
  array (
    'Prospecting' => '10',
    'Qualification' => '20',
    'Needs Analysis' => '25',
    'Value Proposition' => '30',
    'Id. Decision Makers' => '40',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Negotiation/Review' => '80',
    'Closed Won' => '100',
    'Closed Lost' => '0',
  ),
  'activity_dom' =>
  array (
    'Call' => '전화상담',
    'Meeting' => '미팅',
    'Task' => '업무내역',
    'Email' => '이메일',
    'Note' => '메모',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => 'Mr.',
        'Ms.' => 'Ms.',
        'Mrs.' => 'Mrs.',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
      ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time' => 18000,
  'reminder_time_options' => array( 60=> '1분전',
                                  300=> '5분전',
                                  600=> '10분전',
                                  900=> '15분전',
                                  1800=> '30분전',
                                  3600=> '1시간전',
                                  7200 => '2시간전',
                                  10800 => '3시간전',
                                  18000 => '5시간전',
                                  86400 => '하루전',
                                 ),

  'task_priority_default' => 'Medium',
  'task_priority_dom' =>
  array (
    'High' => '높음',
    'Medium' => '보통',
    'Low' => '낮음',
  ),
  'task_status_default' => 'Not Started',
  'task_status_dom' =>
  array (
    'Not Started' => '시작전',
    'In Progress' => '진행중',
    'Completed' => '완료',
    'Pending Input' => '응답대기',
    'Deferred' => '연기',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' =>
  array (
    'Planned' => '계획',
    'Held' => '완료',
    'Not Held' => '취소',
  ),
  'extapi_meeting_password' =>
  array (
      'WebEx' => 'WebEx',
  ),
  'meeting_type_dom' =>
   array (
      'Other' => '기타',
      'Sugar' => 'SugarCRM',
   ),
  'call_status_default' => 'Planned',
  'call_status_dom' =>
  array (
    'Planned' => '계획',
    'Held' => '완료',
    'Not Held' => '취소',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => '수신',
    'Outbound' => '발신',
  ),
    //BEGIN SUGARCRM flav!=sales ONLY
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => '신규',
    'Assigned' => '배정됨',
    'In Process' => '진행중',
    'Converted' => '고객으로전환됨',
    'Recycled' => '다시배정됨',
    'Dead' => '만료됨',
  ),
    //END SUGARCRM flav!=sales ONLY
   'gender_list' =>
  array (
    'male' => '남성',
    'female' => '여성',
  ),
    //BEGIN SUGARCRM flav!=sales ONLY
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'New',
  'case_status_dom' =>
  array (
    'New' => '신규',
    'Assigned' => '배정',
    'Closed' => '완료',
    'Pending Input' => '응담대기',
    'Rejected' => '거절',
    'Duplicate' => '사본',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => '높음',
    'P2' => '보통',
    'P3' => '낮음',
  ),
    //END SUGARCRM flav!=sales ONLY
  'user_type_dom' =>
  array (
    'RegularUser' => '일반사용자',
      //BEGIN SUGARCRM flav=sales ONLY
      'UserAdministrator' => '관리권한 사용자',
      //END SUGARCRM flav=sales ONLY
    'Administrator' => '관리자',
  ),
  'user_status_dom' =>
  array (
    'Active' => '활동중',
    'Inactive' => '활동정지',
  ),
  'employee_status_dom' =>
  array (
    'Active' => '활동중',
    'Terminated' => '퇴사',
    'Leave of Absence' => '휴직중',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
      'NateOn' => '네이트온',
      'KakaoTalk' => '카카오톡',
  ),
    //BEGIN SUGARCRM flav!=sales ONLY
    'project_task_priority_default' => 'Medium',
    'project_task_priority_options' => array (
        'High' => '높음',
        'Medium' => '보통',
        'Low' => '낮음',
    ),

    'project_task_status_options' => array (
        'Not Started' => '시작전',
        'In Progress' => '진행중',
        'Completed' => '완료',
        'Pending Input' => '응답대기',
        'Deferred' => '연기',
    ),
    'project_task_utilization_options' => array (
        '0' => '없음',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => '초안',
        'In Review' => '리뷰중',
        'Published' => '발표',
    ),
    'project_status_default' => 'Draft',

    'project_duration_units_dom' => array (
        'Days' => '일',
        'Hours' => '시간',
    ),

    'project_priority_options' => array (
        'High' => '높음',
        'Medium' => '보통',
        'Low' => '낮음',
    ),
    'project_priority_default' => 'Medium',
    //END SUGARCRM flav!=sales ONLY
  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Accounts',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => '거래처',
    'Opportunities' => '영업기회',
      //BEGIN SUGARCRM flav!=sales ONLY
    'Cases' => '요청사례',
    'Leads' => '관심고객',
      //END SUGARCRM flav!=sales ONLY
    'Contacts' => '연락처', // cn (11/22/2005) added to support Emails
      //BEGIN SUGARCRM flav=pro ONLY
      'ProductTemplates' => 'Product',
      'Quotes' => 'Quote',
      //END SUGARCRM flav=pro ONLY
      //BEGIN SUGARCRM flav!=sales ONLY
    'Bugs' => '오류 및 장애',
    'Project' => '프로젝트',

    'Prospects' => '잠재고객',
    'ProjectTask' => '프로젝트 활동내역',
      //END SUGARCRM flav!=sales ONLY
      //BEGIN SUGARCRM flav=int ONLY

      'Project2' => 'Project2',

      //END SUGARCRM flav=int ONLY
    'Tasks' => '업무내역',

  ),

  'record_type_display_notes' =>
  array (
    'Accounts' => '거래처',
    'Contacts' => '연락처',
    'Cases' => '요청사례',
    'Emails' => '이메일',
      //BEGIN SUGARCRM flav!=dce ONLY
    'Opportunities' => '영업기회',
    'Tasks' => '업무내역',
      //BEGIN SUGARCRM flav=pro ONLY
      'ProductTemplates' => 'Product Catalog',
      'Quotes' => 'Quote',
      'Products' => 'Product',
      'Contracts' => 'Contract',
      //END SUGARCRM flav=pro ONLY


      //BEGIN SUGARCRM flav!=sales ONLY
    'Bugs' => '오류 및 장애',
    'Project' => '프로젝트',
    'ProjectTask' => '프로젝트 활동내역',
    'Prospects' => '잠재고객',
    'Leads' => '관심고객',
      //END SUGARCRM flav!=sales ONLY
    'Meetings' => '미팅',
    'Calls' => '전화상담',
      //END SUGARCRM flav!=dce ONLY
      //BEGIN SUGARCRM flav=dce ONLY
      'DCEInstances' => 'Instance',
      //END SUGARCRM flav=dce ONLY
  ),

  'parent_type_display' =>
  array (
    'Accounts' => '거래처',
    'Contacts' => '연락처',
    'Cases' => '요청사례',
    'Tasks' => '업무내역',
      //BEGIN SUGARCRM flav!=dce ONLY
    'Opportunities' => '영업기회',
      //BEGIN SUGARCRM flav=pro ONLY
      'Products' => 'Product',
      'Quotes' => 'Quote',
      //END SUGARCRM flav=pro ONLY

      //BEGIN SUGARCRM flav!=sales ONLY
    'Bugs' => '오류 및 장애',

    'Leads' => '관심고객',

    'Project' => '프로젝트',
    'ProjectTask' => '프로젝트 활동내역',
      //END SUGARCRM flav!=sales ONLY

    'Prospects' => '잠재고객',
      //END SUGARCRM flav!=dce ONLY
      //BEGIN SUGARCRM flav=dce ONLY
      'DCEInstances' => 'Instance',
      //END SUGARCRM flav=dce ONLY
  ),
      //BEGIN SUGARCRM flav=pro ONLY
    'product_status_default_key' => 'Ship',
    'product_status_quote_key' => 'Quotes',
    'product_status_dom' =>
    array (
        'Quotes' => '견적완료',
        'Orders' => '주문완료',
        'Ship' => '배송완료',
    ),


    'pricing_formula_default_key' => 'Fixed',
    'pricing_formula_dom' =>
    array (
        'Fixed' => 'Fixed Price',
        'ProfitMargin' => 'Profit Margin',
        'PercentageMarkup' => 'Markup over Cost',
        'PercentageDiscount' => 'Discount from List',
        'IsList' => 'Same as List',
    ),
    'product_template_status_dom' =>
    array (
        'Available' => '제',
        'Unavailable' => '품절',
    ),
    'tax_class_dom' =>
    array (
        'Taxable' => '과세품목',
        'Non-Taxable' => '면세품',
    ),
    'support_term_dom' =>
    array (
        '+6 months' => '6개월',
        '+1 year' => '1년',
        '+2 years' => '2년',
    ),

    'quote_type_dom' =>
    array (
        'Quotes' => '견적서',
        'Orders' => '주문',
    ),
    'default_quote_stage_key' => 'Draft',
    'quote_stage_dom' =>
    array (
        'Draft' => '초기제안',
        'Negotiation' => '제안및교섭',
        'Delivered' => '전달',
        'On Hold' => '보류',
        'Confirmed' => '확인',
        'Closed Accepted' => '계약성공',
        'Closed Lost' => '계약실패',
        'Closed Dead' => '계약만료',
    ),
    'default_order_stage_key' => 'Pending',
    'order_stage_dom' =>
    array (
        'Pending' => '대기',
        'Confirmed' => '확인',
        'On Hold' => '보류',
        'Shipped' => '배송됨',
        'Cancelled' => '취소',
    ),

//Note:  do not translate quote_relationship_type_default_key
//       it is the key for the default quote_relationship_type_dom value
    'quote_relationship_type_default_key' => 'Primary Decision Maker',
    'quote_relationship_type_dom' =>
    array (
        '' => '',
        'Primary Decision Maker' => '최고 결정권자',
        'Business Decision Maker' => '사업 결정권자',
        'Business Evaluator' => '사업 평가자',
        'Technical Decision Maker' => '실무 결정권자',
        'Technical Evaluator' => '실무 평가자',
        'Executive Sponsor' => '고위 스폰서',
        'Influencer' => '고위간부 및 영향권자',
        'Other' => '기타',
    ),
    'layouts_dom' =>
    array (
        'Standard' => '견적서',
        'Invoice' => '계산',
    ),
    //END SUGARCRM flav=PRO ONLY
    //BEGIN SUGARCRM flav!=sales ONLY
  'issue_priority_default_key' => 'Medium',
  'issue_priority_dom' =>
  array (
    'Urgent' => '긴급',
    'High' => '높음',
    'Medium' => '보통',
    'Low' => '낮음',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => '수락',
    'Duplicate' => '사본',
    'Closed' => '완료',
    'Out of Date' => '기간만료',
    'Invalid' => '적합치않음',
  ),

  'issue_status_default_key' => 'New',
  'issue_status_dom' =>
  array (
    'New' => '신규',
    'Assigned' => '배정',
    'Closed' => '완료',
    'Pending' => '보류중',
    'Rejected' => '거부',
  ),

  'bug_priority_default_key' => 'Medium',
  'bug_priority_dom' =>
  array (
    'Urgent' => '긴급',
    'High' => '높음',
    'Medium' => '보통',
    'Low' => '낮음',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => '수락',
    'Duplicate' => '사본',
    'Fixed' => '수정됨',
    'Out of Date' => '기간만료',
    'Invalid' => '적합치않음',
    'Later' => '추후처리',
  ),
  'bug_status_default_key' => 'New',
  'bug_status_dom' =>
  array (
    'New' => '신규',
    'Assigned' => '배정',
    'Closed' => '완료',
    'Pending' => '보류중',
    'Rejected' => '거부',
  ),
   'bug_type_default_key' => 'Bug',
  'bug_type_dom' =>
  array (
    'Defect' => '결함',
    'Feature' => '장애',
  ),
 'case_type_dom' =>
  array (
    'Administration' => '관리자및설정',
    'Product' => '제품',
    'User' => '사용자',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => '내부',
    'Forum' => '포럼',
    'Web' => '웹',
    'InboundEmail' => '이메일'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => 'Accounts',
    'Activities' => 'Activities',
    'Bug Tracker' => 'Bug Tracker',
    'Calendar' => 'Calendar',
    'Calls' => 'Calls',
    'Campaigns' => 'Campaigns',
    'Cases' => 'Cases',
    'Contacts' => 'Contacts',
    'Currencies' => 'Currencies',
  'Dashboard' => 'Dashboard',
  'Documents' => 'Documents',
    'Emails' => 'Emails',
    'Feeds' => 'Feeds',
    'Forecasts' => 'Forecasts',
    'Help' => 'Help',
    'Home' => 'Home',
  'Leads' => 'Leads',
  'Meetings' => 'Meetings',
    'Notes' => 'Notes',
    'Opportunities' => 'Opportunities',
    'Outlook Plugin' => 'Outlook Plugin',
      //BEGIN SUGARCRM flav=pro ONLY
      'Product Catalog' => 'Product Catalog',
      'Products' => 'Products',
      //END SUGARCRM flav=pro ONLY
    'Projects' => 'Projects',
    'Quotes' => 'Quotes',
    'Releases' => 'Releases',
    'RSS' => 'RSS',
    'Studio' => 'Studio',
    'Upgrade' => 'Upgrade',
    'Users' => 'Users',
  ),
  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => '계획중',
        'Active' => '활성화중',
        'Inactive' => '정지',
        'Complete' => '완료',
        'In Queue' => '대기중',
        'Sending'=> '전송',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => '전화영업',
        'Mail' => 'DM 우편',
        'Email' => '이메일',
        'Print' => '판촉물 및 홍보브로셔',
        'Web' => '인터넷',
        'Radio' => '라디오광고',
        'Television' => '티비광고',
        'NewsLetter' => '신문광고',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => '매주',
        'Monthly' => '매달',
        'Quarterly' => '매분기',
        'Annually' => '매년',
        ),
      //END SUGARCRM flav!=sales ONLY
  'notifymail_sendtype' =>
  array (
    'SMTP' => 'SMTP',
  ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"1월",
                '2'=>"2월",
                '3'=>"3월",
                '4'=>"4월",
                '5'=>"5월",
                '6'=>"6월",
                '7'=>"7월",
                '8'=>"8월",
                '9'=>"9월",
                '10'=>"10월",
                '11'=>"11월",
                '12'=>"12월",
                ),
        'dom_cal_month_short'=>array(
            '0'=>"",
            '1'=>"1월",
            '2'=>"2월",
            '3'=>"3월",
            '4'=>"4월",
            '5'=>"5월",
            '6'=>"6월",
            '7'=>"7월",
            '8'=>"8월",
            '9'=>"9월",
            '10'=>"10월",
            '11'=>"11월",
            '12'=>"12월",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"일요일",
                '2'=>"월요일",
                '3'=>"화요일",
                '4'=>"수요일",
                '5'=>"목요일",
                '6'=>"금요일",
                '7'=>"토요일",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"일",
                '2'=>"월",
                '3'=>"화",
                '4'=>"수",
                '5'=>"목",
                '6'=>"금",
                '7'=>"토",
        ),
    'dom_meridiem_lowercase'=>array(
                'am'=>"오전",
                'pm'=>"오후"
        ),
    'dom_meridiem_uppercase'=>array(
                 'AM'=>'오전',
                 'PM'=>'오후'
        ),

    'dom_report_types'=>array(
                'tabular'=>'표',
                'summary'=>'요약',
                'detailed_summary'=>'설명 및 요약',
                'Matrix' => '행렬표',
        ),


    'dom_email_types'=> array(
        'out'       => '전송',
        'archived'  => '보관',
        'draft'     => '임시저장',
        'inbound'   => '수신',
        'campaign'  => '캠페인'
    ),
    'dom_email_status' => array (
        'archived'  => '보관됨',
        'closed'    => '삭제됨',
        'draft'     => '임시저장됨',
        'read'      => '읽음',
        'replied'   => '답장발송됨',
        'sent'      => '발송됨',
        'send_error'=> '전송에러',
        'unread'    => '읽지않음',
    ),
    'dom_email_archived_status' => array (
        'archived'  => '보관됨',
    ),

    'dom_email_server_type' => array(   ''          => '--없음--',
                                        'imap'      => 'IMAP',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => '--없음--',
                                     'createcase'  => 'Create Case',
                                     'bounce'   => 'Bounce Handling',
    ),
    'dom_email_distribution'=> array(''             => '--없음--',
                                     'direct'       => 'Direct Assign',
                                     'roundRobin'   => 'Round-Robin',
                                     'leastBusy'    => 'Least-Busy',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'Round-Robin',
                                                     'leastBusy'    => 'Least-Busy',
    ),
    'dom_email_errors'      => array(1 => 'Only select one user when Direct Assigning items.',
                                     2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool'        => array('bool_true' => '예',
                                     'bool_false' => '아니요',
    ),
    'dom_int_bool'          => array(1 => '예',
                                     0 => '아니요',
    ),
    'dom_switch_bool'       => array ('on' => '예',
                                        'off' => '아니요',
                                        '' => '아니요', ),

    'dom_email_link_type'   => array(   'sugar'     => 'Sugar Email Client',
                                        'mailto'    => 'External Email Client'),


    'dom_email_editor_option'=> array(  ''          => 'Default Email Format',
                                        'html'      => 'HTML Email',
                                        'plain'     => 'Plain Text Email'),

    'schedulers_times_dom'  => array(   'not run'       => 'Past Run Time, Not Executed',
                                        'ready'         => 'Ready',
                                        'in progress'   => 'In Progress',
                                        'failed'        => 'Failed',
                                        'completed'     => 'Completed',
                                        'no curl'       => 'Not Run: No cURL available',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => '작동중',
        'Inactive' => '정지',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => '분',
        'hour' => '시',
        ),
    //BEGIN SUGARCRM flav!=sales ONLY
    'forecast_schedule_status_dom' =>
    array (
    'Active' => '작동중',
    'Inactive' => '정지',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'Direct',
    'Rollup' => 'Rollup',
  ),
    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => '마케팅',
    'Knowledege Base' => '교육용자료',
    'Sales' => '영업',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => '판촉물 및 홍보포스터',
    'Product Brochures' => '제품 브로셔',
    'FAQ' => '자주묻는질문',
  ),

    'document_status_dom' =>
    array (
    'Active' => '사용가능',
    'Draft' => '초안',
    'FAQ' => '자주묻는질문',
    'Expired' => '기간만료',
    'Under Review' => '심사중',
    'Pending' => '보류중',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'자동발송 이메일 형식',
    'eula'=>'소프트웨어 사용자 라이선스 동의서(EULA)',
    'nda'=>'기술정보 비밀유지 동의서(NDA)',
    'license'=>'라이센스 동의서',
  ),
    //END SUGARCRM flav!=sales ONLY
    'dom_meeting_accept_options' =>
    array (
    'accept' => '수락',
    'decline' => '거절',
    'tentative' => '예정',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => '수락',
    'decline' => '거절',
    'tentative' => '예정',
    'none'      => '없음',
  ),
    //BEGIN SUGARCRM flav=ent ONLY
    'dataset_output_default_dom' =>
    array (
        'table' => 'Table',
    ),
    'report_maker_status_dom' =>
    array (
        'Single Module' => 'Single Module',
        'Multi Module' => 'Multi Module',
    ),
    'report_align_dom' =>
    array (
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right',
    ),

    'width_type_dom' =>
    array (
        '%' => 'Percent (%)',
        'px' => 'Pixels (px)',
    ),
    'report_color_dom' =>
    array (
        '' => 'Default',
        'black' => 'Black',
        'green' => 'Green',
        'blue' => 'Blue',
        'red' => 'Red',
        'white' => 'White',
        'DarkGreen' => 'Dark Green',
        'LightGray' => 'Light Gray',
        'DodgerBlue' => 'Dodger Blue',
        'LightBlue' => 'Light Blue',
    ),
    'font_size_dom' =>
    array (
        '-5' => 'Smaller (-5)',
        '-4' => 'Smaller (-4)',
        '-3' => 'Smaller (-3)',
        '-2' => 'Smaller (-2)',
        '-1' => 'Smaller (-1)',
        'Default' => 'Default',
        '1' => 'Larger (+1)',
        '2' => 'Larger (+2)',
        '3' => 'Larger (+3)',
        '4' => 'Larger (+4)',
        '5' => 'Larger (+5)',
    ),
    'query_type_dom' =>
    array (
        'Main Query' => 'Main Query',
//  'Sub Query' => 'Sub Query',
//  'Reverse Sub Query' => 'Reverse Sub Query',
    ),
    'query_column_type_dom' =>
    array (
        'Display' => 'Display',
//  'Group By' => 'Group By',
        'Calculation' => 'Calculation',
    ),
    'query_display_type_dom' =>
    array (
        'Default' => 'Default',
        'Custom' => 'Custom',
        'Hidden' => 'Hidden',
    ),

    'query_groupby_qualifier_dom' =>
    array (
        'Day' => 'Day',
        'Week' => 'Week',
        'Month' => 'Month',
        'Quarter' => 'Quarter',
        'Year' => 'Year',
    ),

    'query_groupby_qualifier_qty_dom' =>
    array (
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10',
        '12' => '12',
        '18' => '18',
        '24' => '24',
    ),

    'query_groupby_qualifier_start_dom' =>
    array (
        '0' => 'Now',
        '-1' => '-1',
        '-2' => '-2',
        '-3' => '-3',
        '-4' => '-4',
        '-5' => '-5',
        '-6' => '-6',
        '-7' => '-7',
        '-8' => '-8',
        '-9' => '-9',
        '-10' => '-10',
        '12' => '-12',
        '-18' => '-18',
        '-24' => '-24',
    ),
    'query_groupby_calc_type_dom' =>
    array (
        'SUM' => 'SUM',
        'AVG' => 'AVG',
        'COUNT' => 'Count',
        'STDDEV' => 'Standard Deviation',
        'VARIANCE' => 'Variance',
//  'Custom' => 'Custom',
    ),
    'query_groupby_type_dom' =>
    array (
        'Field' => 'Standard Field',
        'Time' => 'Time Interval',
//  'Custom' => 'Custom Group By',
    ),

    'query_groupby_axis_dom' =>
    array (
        'Rows' => 'Rows (Y-Axis)',
        'Columns' => 'Columns (X-Axis)',
    ),

    'query_calc_calc_type_dom' =>
    array (
        'SUM' => 'Sum (Total)',
        'AVG' => 'Average',
        'MAX' => 'Maximum',
        'MIN' => 'Minimum',
        'COUNT' => 'Count',
        'STDDEV' => 'Standard Deviation',
        'VARIANCE' => 'Variance',
    ),
    'query_calc_type_dom' =>
    array (
        'Standard' => 'Standard',
//  'Sub-Query' => 'Sub Query',
        'Math' => 'Math Calc',
    ),

    'query_calc_oper_dom' =>
    array (
        '+' => '(+) Plus',
        '-' => '(-) Minus',
        '*' => '(X) Multiplied By',
        '/' => '(/) Divided By',
    ),

    'query_calc_leftright_type_dom' =>
    array (
        'Field' => 'Field',
        'Value' => 'Value',
        'Group' => 'Group',
    ),


    'dataset_layout_type_dom' =>
    array (
        'Column' => 'Column',
        //'Row' => 'Row',
    ),

    'custom_layout_dom' =>
    array (
        'Disabled' => 'Disabled',
        'Enabled' => 'Enabled',
    ),
    'dataset_att_display_type_dom' =>
    array (
        'Normal' => 'Normal',
        'Scalar' => 'Scalar',
    ),
    'dataset_att_format_type_dom' =>
    array (
        'Text' => 'Text',
        'Accounting' => 'Accounting',
        'Date' => 'Date',
        'Datetime' => 'Datetime',
    ),
    'dataset_att_format_type_scalar_dom' =>
    array (
        'Year' => 'Year',
        'Quarter' => 'Quarter',
        'Month' => 'Month',
        'Week' => 'Week',
        'Day' => 'Day',
    ),
    'dataset_style_dom' =>
    array (
        'normal' => 'Normal',
        'bold' => 'Bold',
        'italic' => 'Italic',
    ),
      //END SUGARCRM flav=ent ONLY
    //BEGIN SUGARCRM flav=pro ONLY
    'query_calc_oper_dom' =>
    array (
        '+' => '(+) Plus',
        '-' => '(-) Minus',
        '*' => '(X) Multiplied By',
        '/' => '(/) Divided By',
    ),
    'wflow_type_dom' =>
    array (
        'Normal' => 'When record saved',
        'Time' => 'After time elapses',
    ),
    'mselect_type_dom' =>
    array (
        'Equals' => 'Is',
        'in' => 'Is One of',
    ),
    'mselect_multi_type_dom' =>
    array (
        'in' => 'Is One of',
        'not_in' => 'Is Not One of',
    ),
    'cselect_type_dom' =>
    array (
        'Equals' => 'Equals',
        'Does not Equal' => 'Does Not Equal',
    ),
    'dselect_type_dom' =>
    array (
        'Equals' => 'Equals',
        'Less Than' => 'Less Than',
        'More Than' => 'More Than',
        'Does not Equal' => 'Does not Equal',
    ),
    'bselect_type_dom' =>
    array (
        'bool_true' => 'Yes',
        'bool_false' => 'No',
    ),
    'bopselect_type_dom' =>
    array (
        'Equals' => 'Equals',
    ),
    'tselect_type_dom' =>
    array (
        '0'     =>  '0 hours',
        '14440' => '4 hours',
        '28800' => '8 hours',
        '43200' => '12 hours',
        '86400' => '1 day',
        '172800' => '2 days',
        '259200' => '3 days',
        '345600' => '4 days',
        '432000' => '5 days',
        '604800' => '1 week',
        '1209600' => '2 weeks',
        '1814400' => '3 weeks',
        '2592000' => '30 days',
        '5184000' => '60 days',
        '7776000' => '90 days',
        '10368000' => '120 days',
        '12960000' => '150 days',
        '15552000' => '180 days',
    ),
    'dtselect_type_dom' =>
    array (
        'More Than' => 'was more than',
        'Less Than' => 'is less than',
    ),
    'wflow_alert_type_dom' =>
    array (
        'Email' => 'Email',
        'Invite' => 'Invite',
    ),
    'wflow_source_type_dom' =>
    array (
        'Normal Message' => 'Normal Message',
        'Custom Template' => 'Custom Template',
        'System Default' => 'System Default',
    ),
    'wflow_user_type_dom' =>
    array (
        'current_user' => 'Current Users',
        'rel_user' => 'Related Users',
        'rel_user_custom' => 'Related Custom User',
        'specific_team' => 'Specific Team',
        'specific_role' => 'Specific Role',
        'specific_user' => 'Specific User',
    ),
    'wflow_array_type_dom' =>
    array (
        'future' => 'New Value',
        'past' => 'Old Value',
    ),
    'wflow_relate_type_dom' =>
    array (
        'Self' => 'User',
        'Manager' => "User's Manager",
    ),
    'wflow_address_type_dom' =>
    array (
        'to' => 'To:',
        'cc' => 'CC:',
        'bcc' => 'BCC:',
    ),
    'wflow_address_type_invite_dom' =>
    array (
        'to' => 'To:',
        'cc' => 'CC:',
        'bcc' => 'BCC:',
        'invite_only' => '(Invite Only)',
    ),
    'wflow_address_type_to_only_dom' =>
    array (
        'to' => 'To:',
    ),
    'wflow_action_type_dom' =>
    array (
        'update' => 'Update Record',
        'update_rel' => 'Update Related Record',
        'new' => 'New Record',
    ),
    'wflow_action_datetime_type_dom' =>
    array (
        'Triggered Date' => 'Triggered Date',
        'Existing Value' => 'Existing Value',
    ),
    'wflow_set_type_dom' =>
    array (
        'Basic' => 'Basic Options',
        'Advanced' => 'Advanced Options',
    ),
    'wflow_adv_user_type_dom' =>
    array (
        'assigned_user_id' => 'User assigned to triggered record',
        'modified_user_id' => 'User who last modified triggered record',
        'created_by' => 'User who created triggered record',
        'current_user' => 'Logged-in User',
    ),
    'wflow_adv_team_type_dom' =>
    array (
        'team_id' => 'Current Team of triggered Record',
        'current_team' => 'Team of Logged-in User',
    ),
    'wflow_adv_enum_type_dom' =>
    array (
        'retreat' => 'Move dropdown backwards by ',
        'advance' => 'Move dropdown forwards by ',
    ),
    'wflow_record_type_dom' =>
    array (
        'All' => 'New and Updated Records',
        'New' => 'New Records Only',
        'Update' => 'Updated Records Only',
    ),
    'wflow_rel_type_dom' =>
    array (
        'all' => 'All related',
        //'first' => 'The first related',
        'filter' => 'Filter related',
    ),
    'wflow_relfilter_type_dom' =>
    array (
        'all' => 'all related',
        'any' => 'any related',
    ),
    'wflow_fire_order_dom' => array('alerts_actions'=>'Alerts then Actions',
        'actions_alerts'=>'Actions then Alerts'),



      //END SUGARCRM flav=pro ONLY
    'duration_intervals' => array('0'=>'00',
                                    '15'=>'15',
                                    '30'=>'30',
                                    '45'=>'45'),

    'repeat_type_dom' => array(
    	'' => '없음',
    	'Daily'	=> '매일',
	'Weekly' => '매주',
	'Monthly' => '매달',
	'Yearly' => '매년',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => '일',
        'Weekly' => '주',
        'Monthly' => '개월',
        'Yearly' => '년',
    ),

    'duration_dom' => array(
    	'' => '없음',
    	'900' => '15분',
	'1800' => '30분',
	'2700' => '45분',
	'3600' => '1시간',
	'5400' => '1시간반',
	'7200' => '2시간',
	'10800' => '3시간',
	'21600' => '6시간',
	'86400' => '1일',
	'172800' => '2일',
	'259200' => '3일',
	'604800' => '1주',
    ),

// deferred
/*// QUEUES MODULE DOMs
'queue_type_dom' => array(
    'Users' => 'Users',
    'Mailbox' => 'Mailbox',
),
*/
      //BEGIN SUGARCRM flav!=sales ONLY
//prospect list type dom
  'prospect_list_type_dom' =>
  array (
    'default' => '기본',
    'seed' => '신규배정',
    'exempt_domain' => '거부 목록 - 도메인',
    'exempt_address' => '거부 목록 - 이메일주소',
    'exempt' => '거부 목록 - 고유번호',
    'test' => '테스트',
  ),

  'email_settings_num_dom' =>
  array(
        '10'    => '10',
        '20'    => '20',
        '50'    => '50'
    ),
  'email_marketing_status_dom' =>
  array (
    '' => '',
    'active'=>'활동중',
    'inactive'=>'정지'
  ),

  'campainglog_activity_type_dom' =>
  array (
    ''=>'',
    'targeted' => '메세지 전송/미응답',
    'send error'=>'반송 및 기타에러',
    'invalid email'=>'확인할 수 없는 주소',
    'link'=>'링크확인',
    'viewed'=>'수신확인',
    'removed'=>'수신거부',
    'lead'=>'관심고객으로 전환',
    'contact'=>'거래처로 전환',
    'blocked'=>'거부목록에 포함된 주소',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => '연락처',
    'Users'=>'일반고객',
    'Prospects'=>'잠재고객',
    'Leads'=>'관심고객',
    'Accounts'=>'거래처',
  ),
    //END SUGARCRM flav!=sales ONLY
  'merge_operators_dom' => array (
    'like'=>'Contains',
    'exact'=>'Exactly',
    'start'=>'Starts With',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'예',
    'false'=>'아니요',
    'required'=>'필수항목',
  ),

    'Elastic_boost_options' => array (
        '0' =>'Disabled',
        '1'=>'Low Boost',
        '2'=>'Medium Boost',
        '3'=>'High Boost',
    ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Disabled',
        1=>'Enabled',
      //BEGIN SUGARCRM flav=pro ONLY
        2=>'In Filter',
        3=>'Default Selected Filter',
        4=>'Filter Only',
      //END SUGARCRM flav=pro ONLY
  ),

  'navigation_paradigms' => array(
        'm'=>'모듈',
        'gm'=>'그룹화된 모듈',
  ),
      //BEGIN SUGARCRM flav=pro ONLY

    // Contracts module enums

    'contract_status_dom' => array (
        'notstarted' => 'Not Started',
        'inprogress' => 'In Progress',
        'signed' => 'Signed',
    ),

    'contract_payment_frequency_dom' => array (
        'monthly' => 'Monthly',
        'quarterly' => 'Quarterly',
        'halfyearly' => 'Half yearly',
        'yearly' => 'Yearly',
    ),

    'contract_expiration_notice_dom' => array (
        '1' => '1 Day',
        '3' => '3 Days',
        '5' => '5 Days',
        '7' => '1 Week',
        '14' => '2 Weeks',
        '21' => '3 Weeks',
        '31' => '1 Month',
    ),

    'oc_status_dom' =>
    array (
        '' => '',
        'Active' => 'Active',
        'Inactive' => 'Inactive',
    ),


      //END SUGARCRM flav=pro ONLY
      //BEGIN SUGARCRM flav!=sales ONLY

    'projects_priority_options' => array (
        'high'      => '높음',
        'medium'    => '보통',
        'low'       => '낮음',
    ),

    'projects_status_options' => array (
        'notstarted'    => '시작전',
        'inprogress'    => '진행중',
        'completed'     => '완료',
    ),
      //END SUGARCRM flav!=sales ONLY
    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => 'Expand Legend',
        'collapselegend'    => 'Collapse Legend',
        'clickfordrilldown' => 'Click for Drilldown',
        'drilldownoptions'  => 'Drill Down Options',
        'detailview'        => 'More Details...',
        'piechart'          => 'Pie Chart',
        'groupchart'        => 'Group Chart',
        'stackedchart'      => 'Stacked Chart',
        'barchart'      => 'Bar Chart',
        'horizontalbarchart'   => 'Horizontal Bar Chart',
        'linechart'         => 'Line Chart',
        'noData'            => 'Data not available',
        'print'       => 'Print',
        'pieWedgeName'      => 'sections',
    ),
    //BEGIN SUGARCRM flav=pro ONLY
    'pipeline_chart_dom' => array (
        'fun'   => 'Funnel',
        'hbar'  => 'Horizontal Bar',
    ),
    //END SUGARCRM flav=pro ONLY
    //BEGIN SUGARCRM flav=dce ONLY
    'server_status_list' => array (
        'active' => 'Active',
        'maintenance' => 'Maintenance',
        'rebooting' => 'Rebooting',
    ),
    'instance_status_list' => array (
        'new' => 'New',
        'live' => 'Live',
        'in_progress' => 'In Progress',
        'archived' => 'Archived',
    ),
    'action_status_list' => array (
        'queued' => 'Queued',
        'started' => 'Started',
        'pending' => 'Pending',
        'suspended' => 'Suspended',
        'completed' => 'Completed',
        'done' => 'Done',
        'failed' => 'Failed',
    ),
    'action_priority_list' => array (
        '3' => 'Urgent',
        '2' => 'High',
        '1' => 'Medium',
        '0' => 'Low',
    ),
    'action_type_list' => array (
        'create' => 'Create',
        'convert' => 'Convert',
        'clone' => 'Clone',
        'recover' => 'Recover',
        'archive' => 'Archive',
        'delete' => 'Delete',
        'toggle_on' => 'Enable Support User',
        'toggle_off' => 'Disable Support User',
        'upgrade_live' => 'Upgrade Live',
        'upgrade_test' => 'Upgrade Test',
        'key' => 'Update Key',
        'report' => 'DCE Report',
    ),
    'status_list' => array (
        'active' => 'Active',
        'innactive' => 'Innactive',
        'pending_approval' => 'Pending Approval',
        'dummy' => 'Place Holder',
    ),
    'production_duration_default_key' => '365',
    'production_duration_list' => array (
        '365' => '1 year',
    ),
    'production_extended_duration_default_key' => '0',
    'production_extended_duration_list' => array (
        '0' => '',
        '365' => '1 year',
    ),
    'convert_status_list' => array (
        'no' => 'Not Converted',
        'yes' => 'Converted',
        'error' => 'Could Not Convert',
    ),

    'evaluation_duration_default_key' => '30',
    'evaluation_duration_list' => array (
        '15' => '15 days',
        '30' => '30 days',
    ),
    'evaluation_extended_duration_default_key' => '0',
    'evaluation_extended_duration_list' => array (
        '0' => '',
        '15' => '15 days',
        '30' => '30 days',
    ),
    'instance_type_list' => array (
        'evaluation' => 'Evaluation',
        'production' => 'Production',
    ),
    'url_format_list' => array (
        'URL/Instance_Name' => '(URL)/(Instance Name)',
        'Instance_Name.URL' => '(Instance Name).(URL)',
    ),
    //Note:  do not translate dceinstance_contact_relationship_type_default_key
//       it is the key for the default dceinstance_contact_relationship_type_dom value
    'dceinstance_contact_relationship_type_default_key' => 'Primary Decision Maker',
    'dceinstance_contact_relationship_type_dom' =>
    array (
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Technical Decision Maker' => 'Technical Decision Maker',
    ),
    //Note:  do not translate dceinstance_user_relationship_type_default_key
//       it is the key for the default dceinstance_user_relationship_type_dom value
    'dceinstance_user_relationship_type_default_key' => 'Sales Rep',
    'dceinstance_user_relationship_type_dom' =>
    array (
        '' => '',
        'Sales Rep' => 'Sales Rep',
        'Support Rep' => 'Support Rep',
    ),
      //END SUGARCRM flav=dce ONLY
    'release_status_dom' =>
    array (
        'Active' => '작동중',
        'Inactive' => '중지',
    ),
    'email_settings_for_ssl' =>
    array (
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' =>
    array (
        '\'' => 'Single Quote (\')',
        '"' => 'Double Quote (")',
        '' => 'None',
        'other' => 'Other:',
    ),
    'import_delimeter_options' =>
    array (
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Other:',
    ),
    'link_target_dom' =>
    array (
        '_blank' => '새창으로이동',
        '_self' => '동일페이지이동',
    ),
    'dashlet_auto_refresh_options' =>
    array (
        '-1'  => '사용하지않음',
        '30'  => '매 30초마다',
        '60'  => '매 1분마다',
        '180'   => '매 3분마다',
        '300'   => '매 5분마다',
        '600'   => '매 10분마다',
    ),
  'dashlet_auto_refresh_options_admin' =>
    array (
        '-1'  => '사용하지않음',
        '30'  => '매 30초마다',
        '60'  => '매 1분마다',
        '180'   => '매 3분마다',
        '300'   => '매 5분마다',
        '600'   => '매 10분마다',
    ),
  'date_range_search_dom' =>
  array(
    '=' => '해당일',
    'not_equal' => '해당일이외',
    'greater_than' => '이후',
    'less_than' => '이전',
    'last_7_days' => '지난 일주일',
    'next_7_days' => '다음 일주일',
    'last_30_days' => '지난 30일',
    'next_30_days' => '다음 30일',
    'last_month' => '이전달',
    'this_month' => '이번달',
    'next_month' => '다음달',
    'last_year' => '작년',
    'this_year' => '올해',
    'next_year' => '내년',
    'between' => '기간',
  ),
  'numeric_range_search_dom' =>
  array(
    '=' => '동일',
    'not_equal' => '제외',
    'greater_than' => '큰',
    'greater_than_equals' => '같거나 큰',
    'less_than' => '작은',
    'less_than_equals' => '같거나 작은',
    'between' => '구간',
  ),
  'lead_conv_activity_opt' =>
  array(
        'copy' => '복사',
        'move' => '이동',
        'donothing' => '없음'
  ),
);

$app_strings = array (
  'LBL_MY_AREA_LINKS' => 'My area links: ' /*for 508 compliance fix*/,
  'LBL_GETTINGAIR' => 'Getting Air' /*for 508 compliance fix*/,
  'LBL_WELCOMEBAR' => '환영합니다' /*for 508 compliance fix*/,
  'LBL_ADVANCEDSEARCH' => '세부 검색' /*for 508 compliance fix*/,
  'LBL_MOREDETAIL' => '상세정보' /*for 508 compliance fix*/,
  'LBL_EDIT_INLINE' => '바로 수정' /*for 508 compliance fix*/,
  'LBL_VIEW_INLINE' => '보기' /*for 508 compliance fix*/,
  'LBL_BASIC_SEARCH' => '검색' /*for 508 compliance fix*/,
  'LBL_PROJECT_MINUS' => '제거' /*for 508 compliance fix*/,
  'LBL_PROJECT_PLUS' => '추가' /*for 508 compliance fix*/,
  'LBL_Blank' => ' ' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_1' => '1열' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_2' => '2열' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_3' => '3열' /*for 508 compliance fix*/,
  'LBL_ADVANCED_SEARCH' => '세부 검색' /*for 508 compliance fix*/,
  'LBL_ID_FF_ADD' => '추가' /*for 508 compliance fix*/,
  'LBL_HIDE_SHOW' => '접기/펴기' /*for 508 compliance fix*/,
  'LBL_DELETE_INLINE' => '삭제' /*for 508 compliance fix*/,
  'LBL_PLUS_INLINE' => '추가' /*for 508 compliance fix*/,
  'LBL_ID_FF_CLEAR' => '지움' /*for 508 compliance fix*/,
  'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
  'LBL_ID_FF_REMOVE' => '제거' /*for 508 compliance fix*/,
  'LBL_ADD' => 'Add' /*for 508 compliance fix*/,
  'LBL_COMPANY_LOGO' => '회사 로고' /*for 508 compliance fix*/,
  'LBL_JS_CALENDAR' => '달력' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => '고급',
    'LBL_BASIC' => '기본',
    'LBL_MODULE_FILTER' => 'Filter By',
    'LBL_CONNECTORS_POPUPS'=>'접속창 열기',
    'LBL_CLOSEINLINE'=>'닫기',
    'LBL_MOREDETAIL'=>'세부정보',
    'LBL_EDITINLINE'=>'수정',
    'LBL_VIEWINLINE'=>'보기',
    'LBL_INFOINLINE'=>'정보',
    'LBL_POWERED_BY_SUGARCRM' => "Powered by SugarCRM",
    'LBL_PRINT' => "인쇄하기",
    'LBL_HELP' => "도움",
    'LBL_ID_FF_SELECT' => "선택하기",
    'DEFAULT'                              => '기본',
    'LBL_SORT'                              => '정열',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => '이메일전송서버추가',
    'LBL_EMAIL_SMTP_SSL_OR_TLS'         => 'SMTP서버를 SSL 혹은 TLS중에 선택해주세요',
    'LBL_NO_ACTION'                         => '올바르지 않은 주소입니다.',
    'LBL_NO_DATA'                           => '자료가 없습니다.',
    'LBL_ROUTING_ADD_RULE'                  => 'Add Rule',
    'LBL_ROUTING_ALL'                       => 'At Least',
    'LBL_ROUTING_ANY'                       => 'Any',
    'LBL_ROUTING_BREAK'                     => '-',
    'LBL_ROUTING_BUTTON_CANCEL'             => '취소',
    'LBL_ROUTING_BUTTON_SAVE'               => '저장',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => 'Copy Mail',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Delete Sugar Object',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'Delete File',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'Delete Email',
    'LBL_ROUTING_ACTIONS_FORWARD'           => 'Forward Email',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'Flag Email',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => 'Mark Read',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => 'Mark Unread',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => 'Move Email',
    'LBL_ROUTING_ACTIONS_PEFORM'            => 'Perform the following actions',
    'LBL_ROUTING_ACTIONS_REPLY'             => 'Reply to Email',

    'LBL_ROUTING_CHECK_RULE'                => "An error was detected:\n",
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'Please verify all fields that are marked.',
    'LBL_ROUTING_CONFIRM_DELETE'            => "Are you sure you want to delete this rule?\nThis cannot be undone.",

    'LBL_ROUTING_FLAGGED'                   => 'flag set',
    'LBL_ROUTING_FORM_DESC'                 => 'Saved Rules are immediately active.',
    'LBL_ROUTING_FW'                        => 'FW: ',
    'LBL_ROUTING_LIST_TITLE'                => 'Rules',
    'LBL_ROUTING_MATCH'                     => 'If',
    'LBL_ROUTING_MATCH_2'                   => 'of the following conditions are met:',
    'LBL_NOTIFICATIONS'                     => 'Notifications',
    'LBL_ROUTING_MATCH_CC_ADDR'             => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => 'Body Content',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'From',
    'LBL_ROUTING_MATCH_NAME'                => 'Subject',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => 'High Priority',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => 'Normal Priority',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => 'Low Priority',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'To',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'Contains',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'Does not contain',

    'LBL_ROUTING_NAME'                      => 'Rule Name',
    'LBL_ROUTING_NEW_NAME'                  => 'New Rule',
    'LBL_ROUTING_ONE_MOMENT'                => 'One moment please...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => 'Original message follows.',
    'LBL_ROUTING_RE'                        => 'RE: ',
    'LBL_ROUTING_SAVING_RULE'               => 'Saving Rule',
    'LBL_ROUTING_SUB_DESC'                  => 'Checked rules are active. Click name to edit.',
    'LBL_ROUTING_TO'                        => 'to',
    'LBL_ROUTING_TO_ADDRESS'                => 'to address',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'with template',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'This record currently contains values in the Office Phone and Address fields. To overwrite these values with the following Office Phone and Address of the Account that you selected, click "OK". To keep the current values, click "Cancel".',
  'LBL_DROP_HERE' => '[Drop Here]',
    'LBL_EMAIL_ACCOUNTS_EDIT'               => '수정',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Prefill Gmail&#153; Defaults',
    'LBL_EMAIL_ACCOUNTS_NAME'               => 'Name',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'Outgoing Mail Server Properties',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'Mail transfer agent',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'Use SMTP Authentication?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'SMTP Password',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'SMTP Port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'SMTP Server',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => 'Use SSL when connecting',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'SMTP Username',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT'        => 'Default',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS'  => 'Warning: Missing username and password for outgoing mail account.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD'      => 'SMTP Username is required',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD'      => 'SMTP Password is required',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => 'Mail Account Management',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE'     => 'Mail Server Protocol of type POP3 will not be supported in the next release. Only IMAP will be supported.',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE'           => 'Set up Mail Accounts to view incoming emails from your email accounts.',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE'  => 'Provide SMTP mail server information to use for outgoing email in Mail Accounts.',
    'LBL_EMAIL_ADD'                         => 'Add Address',
    'LBL_EMAIL_ADDRESS'                     => '이메일',
    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => 'Done',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR'          => 'Clear',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'         => 'To:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'         => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'        => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE'   => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'New List',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => 'Email Address',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> 'Only Contact editting is supported at this time.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => 'First Name/Account Name',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => 'Last Name',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => 'My Contacts',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => 'My Mailing Lists',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => 'Name',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'No Addresses Found',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => 'Save & Add to Address Book',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => 'Search',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'Select Email Recipients',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'Address Book',
    'LBL_EMAIL_REPORTS_TITLE'               => 'Reports',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', "", null, null, ".gif", 'Address Book').' Address Book',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, ".gif", ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING'         => 'Warning! The outbound account you are trying to delete is associated to an existing inbound account.  Are you sure you want to continue?',
    'LBL_EMAIL_ADDRESSES'                   => 'Email',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => 'Email Address',
    'LBL_EMAIL_ADDRESSES_TITLE'             => 'Email Addresses',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Import to Sugar',
    'LBL_EMAIL_ASSIGNMENT'                  => 'Assignment',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'Attach',
    'LBL_EMAIL_ATTACHMENT'                  => 'Attach',
    'LBL_EMAIL_ATTACHMENTS'                 => 'From Local System',
    'LBL_EMAIL_ATTACHMENTS2'                => 'From Sugar Documents',
    'LBL_EMAIL_ATTACHMENTS3'                => 'Template Attachments',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'File',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'Document',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => 'Embeded',
    'LBL_EMAIL_BCC'                         => 'BCC',
    'LBL_EMAIL_CANCEL'                      => 'Cancel',
    'LBL_EMAIL_CC'                          => 'CC',
    'LBL_EMAIL_CHARSET'                     => 'Character Set',
    'LBL_EMAIL_CHECK'                       => 'Check Mail',
    'LBL_EMAIL_CHECKING_NEW'                => 'Checking for New Email',
    'LBL_EMAIL_CHECKING_DESC'               => 'One moment please... <br><br>If this is the first check for the mail account, it may take some time.',
    'LBL_EMAIL_CLOSE'                       => 'Close',
    'LBL_EMAIL_COFFEE_BREAK'                => 'Checking for New Email. <br><br>Large mail accounts may take a considerable amount of time.',
    'LBL_EMAIL_COMMON'                      => 'Common',

    'LBL_EMAIL_COMPOSE'                     => 'Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'Please enter recipient(s) for this email.',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'Associate with',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'The body of this email is empty.  Send anyway?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'This email has no subject.  Send anyway?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(no subject)',
    'LBL_EMAIL_COMPOSE_READ'                => 'Read & Compose Email',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'Send From Mail Account',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'Options',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'Please enter valid email address for To, CC and BCC fields',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'Discard this email?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'Remove these entries from your Address Book?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'Are you sure you want to delete this signature?',

    'LBL_EMAIL_CREATE_NEW'                  => '--Create On Save--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS'  => 'Multiple',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Empty',
    'LBL_EMAIL_DATE_SENT_BY_SENDER'         => 'Date Sent by Sender',
  'LBL_EMAIL_DATE_RECEIVED'               => 'Date Received',
    'LBL_EMAIL_ASSIGNED_TO_USER'            =>'Assigned to User',
    'LBL_EMAIL_DATE_TODAY'                  => 'Today',
    'LBL_EMAIL_DATE_YESTERDAY'              => 'Yesterday',
    'LBL_EMAIL_DD_TEXT'                     => 'email(s) selected.',
    'LBL_EMAIL_DEFAULTS'                    => 'Defaults',
    'LBL_EMAIL_DELETE'                      => 'Delete',
    'LBL_EMAIL_DELETE_CONFIRM'              => 'Delete selected messages?',
    'LBL_EMAIL_DELETE_SUCCESS'              => 'Email deleted successfully.',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'Deleting Message',
    'LBL_EMAIL_DETAILS'                     => 'Details',
    'LBL_EMAIL_DISPLAY_MSG'                 => 'Displaying email(s) {0} - {1} of {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => 'Displaying email address(es) {0} - {1} of {2}',

    'LBL_EMAIL_EDIT_CONTACT'                => 'Edit Contact',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => 'Only the Primary address will be used when working with Contacts.',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'Edit Mailing List',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'Emptying Trash',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'Deleteting outbound server',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'CLearing cache files',
    'LBL_EMAIL_EMPTY_MSG'                   => 'No emails to display.',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => 'No email addresses to display.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'Folder name be unique and not empty. Please try again.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'Cannot delete a folder. Either the folder or its children has emails or a mail box associated to it.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => 'Cannot determine the intended folder from context.  Try again.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => 'Please check your settings.',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => 'Please make sure you enter a last name.',
    'LBL_EMAIL_ERROR_DESC'                  => 'Errors were detected: ',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'You do not have access to this area. Contact your site administrator to obtain access.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'Sugar Folder names must be unique.',
    'LBL_EMAIL_ERROR_EMPTY'                 => 'Please enter some search criteria.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'An error has occured',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'An email list with that name already exists',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'Message Removed from Server',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'Either message Removed from Server or moved to a different folder',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'Connection to the mail server failed. Please contact your Administrator',
    'LBL_EMAIL_ERROR_MOVE'                  => 'Moving email between servers and/or mail accounts is not supported at this time.',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => 'Move Error',
    'LBL_EMAIL_ERROR_NAME'                  => 'A name is required.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => 'From Address is required.  Please enter a valid email address.',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'Please provide a file.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP folder renaming is not supported at this time.',
    'LBL_EMAIL_ERROR_SERVER'                => 'A mail server address is required.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'The mail account may not have been saved.',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'An error has occured while communicating with the mail server.',
    'LBL_EMAIL_ERROR_USER'                  => 'A login name is required.',
    'LBL_EMAIL_ERROR_PASSWORD'              => 'A password is required.',
    'LBL_EMAIL_ERROR_PORT'                  => 'A mail server port is required.',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'A server protocol is required.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => 'Monitored Folder is required.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'Trash Folder is required.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'This information is not available',
    'LBL_EMAIL_ERROR_NO_OUTBOUND'           => 'No outgoing mail server specified.',
    'LBL_EMAIL_FOLDERS'                     => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", '').'Folders',
    'LBL_EMAIL_FOLDERS_SHORT'               => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'Move To',
    'LBL_EMAIL_FOLDERS_ADD'                 => 'Add',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => 'Add New Folder',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Rename Folder',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => 'Save',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'Add this folder to',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'This folder cannot be changed',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'Are you sure you would like to delete this folder?\nThis process cannot be reversed.\nFolder deletions will cascade to all contained folders.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => 'New Folder Name',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'Please select a folder before performing this action.',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Folder Management',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'Using Group',

    'LBL_EMAIL_FORWARD'                     => 'Forward',
    'LBL_EMAIL_DELIMITER'                   => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => 'Downloaded [[count]] of [[total]] emails',
    'LBL_EMAIL_FOUND'                       => 'Found',
    'LBL_EMAIL_FROM'                        => 'From',
    'LBL_EMAIL_GROUP'                       => 'group',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'Group',
    'LBL_EMAIL_HOME_FOLDER'                 => 'Home',
    'LBL_EMAIL_HTML_RTF'                    => 'Send HTML',
    'LBL_EMAIL_IE_DELETE'                   => 'Deleting Mail Account',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'Deleting signature',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'Are you sure you would like to delete this mail account?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => 'Deletion successful.',
    'LBL_EMAIL_IE_SAVE'                     => 'Saving Mail Account Information',
    'LBL_EMAIL_IMPORTING_EMAIL'             => 'Importing Email',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Import to Sugar',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'Import Settings',
    'LBL_EMAIL_INVALID'                     => 'Invalid',
    //BEGIN SUGARCRM flav=pro ONLY
    'LBL_EMAIL_LIST_RENAME_TITLE'           => 'Rename Mailing List',
    'LBL_EMAIL_LIST_RENAME_DESC '           => 'Enter a new name for this mailing list',
    'LBL_EMAIL_CONFIRM_DELETE_LIST'         => 'Remove these entries from your mailing lists?',
    //END SUGARCRM flav=pro ONLY
    'LBL_EMAIL_LOADING'                     => 'Loading...',
    'LBL_EMAIL_MARK'                        => 'Mark',
    'LBL_EMAIL_MARK_FLAGGED'                => 'As Flagged',
    'LBL_EMAIL_MARK_READ'                   => 'As Read',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'As Unflagged',
    'LBL_EMAIL_MARK_UNREAD'                 => 'As Unread',
    'LBL_EMAIL_ASSIGN_TO'                   => 'Assign To',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'Create Folder',
    'LBL_EMAIL_MENU_COMPOSE'                => 'Compose to',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'Delete Folder',
    'LBL_EMAIL_MENU_EDIT'                   => '수정',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'Empty Trash',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => 'Synchronize',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'Clear cache files',
    'LBL_EMAIL_MENU_REMOVE'                 => 'Remove',
    'LBL_EMAIL_MENU_RENAME'                 => 'Rename',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'Rename Folder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'Renaming Folder',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'Please make a selection before trying this operation.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'Create a Folder (remote or in Sugar)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'Archive these email(s) to SugarCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => 'Email selected Mailing Lists',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => 'Email this Contact',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => 'Remove a Contact',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'Delete these email(s)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'Delete a Folder (remote or in Sugar)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => 'Edit a Contact',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'Edit a Mailing List',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'Empties all Trash folders for your mail accounts',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'Mark these email(s) flagged',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'Mark these email(s) read',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'Mark these email(s) unflagged',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'Mark these email(s) unread',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'Removes Mailing Lists',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'Rename a Folder (remote or in Sugar)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'Reply to these email(s)',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'Reply to all recipients for these email(s)',

    'LBL_EMAIL_MESSAGES'                    => 'messages',

    'LBL_EMAIL_ML_NAME'                     => 'List Name',
    'LBL_EMAIL_ML_ADDRESSES_1'              => 'Selected List Addresses',
    'LBL_EMAIL_ML_ADDRESSES_2'              => 'Available List Addresses',

    'LBL_EMAIL_MULTISELECT'                 => '<b>Ctrl-Click</b> to select multiples<br />(Mac users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO'                          => 'No',
    'LBL_EMAIL_NOT_SENT'                    => 'System is unable to process your request. Please contact the system administrator.',

    'LBL_EMAIL_OK'                          => '확인',
    'LBL_EMAIL_ONE_MOMENT'                  => '잠시만 기다려 주세요...',
    'LBL_EMAIL_OPEN_ALL'                    => 'Open Multiple Messages',
    'LBL_EMAIL_OPTIONS'                     => 'Options',
    'LBL_EMAIL_QUICK_COMPOSE'       => 'Quick Compose',
    'LBL_EMAIL_OPT_OUT'                     => 'Opted Out',
    'LBL_EMAIL_OPT_OUT_AND_INVALID'         => 'Opted Out and Invalid',
    'LBL_EMAIL_PAGE_AFTER'                  => 'of {0}',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'Page',
    'LBL_EMAIL_PERFORMING_TASK'             => 'Performing Task',
    'LBL_EMAIL_PRIMARY'                     => 'Primary',
    'LBL_EMAIL_PRINT'                       => 'Print',

    'LBL_EMAIL_QC_BUGS'                     => 'Bug',
    'LBL_EMAIL_QC_CASES'                    => 'Case',
    'LBL_EMAIL_QC_LEADS'                    => 'Lead',
    'LBL_EMAIL_QC_CONTACTS'                 => 'Contact',
    'LBL_EMAIL_QC_TASKS'                    => 'Task',
    'LBL_EMAIL_QC_OPPORTUNITIES'            => 'Opportunity',
    'LBL_EMAIL_QUICK_CREATE'                => 'Quick Create',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'Rebuilding Folders',
    'LBL_EMAIL_RELATE_TO'                   => 'Relate',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => 'View Relationships',
    'LBL_EMAIL_RECORD'                => 'Email Record',
    'LBL_EMAIL_REMOVE'                      => 'Remove',
    'LBL_EMAIL_REPLY'                       => 'Reply',
    'LBL_EMAIL_REPLY_ALL'                   => 'Reply All',
    'LBL_EMAIL_REPLY_TO'                    => 'Reply-to',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'Retrieving Email List',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'Retrieving Message',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'Retrieving Email Record',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Please select only one email record',
    'LBL_EMAIL_RETURN_TO_VIEW'              => 'Return to Previous Module?',
    'LBL_EMAIL_REVERT'                      => 'Revert',
    'LBL_EMAIL_RELATE_EMAIL'                => 'Relate Email',

    'LBL_EMAIL_RULES_TITLE'                 => 'Rule Management',

    'LBL_EMAIL_SAVE'                        => 'Save',
    'LBL_EMAIL_SAVE_AND_REPLY'              => 'Save & Reply',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'Save Draft',

    'LBL_EMAIL_SEARCHING'                   => 'Conducting Search',
    'LBL_EMAIL_SEARCH'                      => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_SHORT'                => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_ADVANCED'             => 'Advanced Search',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => 'Date From',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => 'Date Until',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => 'Body Text',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => 'No results match your search criteria.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => 'Search Results',
    'LBL_EMAIL_SEARCH_TITLE'                => 'Simple Search',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'Search email account',

    'LBL_EMAIL_SELECT'                      => 'Select',

    'LBL_EMAIL_SEND'                        => 'Send',
    'LBL_EMAIL_SENDING_EMAIL'               => 'Sending Email',

    'LBL_EMAIL_SETTINGS'                    => 'Settings',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2 Rows',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3 Columns',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'Layout Style',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'Mail Accounts',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'Clear Form',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => 'Import Email Upon View',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => 'Check for New Mail',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'Use Preview Pane',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'Use Popup Window',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'Number emails per page',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'Edit Mail Account',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'Folders',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => 'From Address',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Email Address For Test Notification:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR'      => 'To Email Address',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => 'From Name',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR'      =>'Reply to Address',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'Full Screen',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'Synchronize All Mail Accounts',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT'      => 'An email was sent to the specified email address using the provided outgoing mail settings. Please check to see if the email was received to verify the settings are correct.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => 'Performing this action will synchronize mail accounts and their contents.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'Perform a full synchronization?\nLarge mail accounts may take a few minutes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'Click the Shift key or the Ctrl key to select multiple folders.',
    'LBL_EMAIL_SETTINGS_GENERAL'            => 'General',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => 'Available Group Folders',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'Create Group Folders',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Saving Group Folders',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'Retrieving Group Folder',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Edit Group Folder',

    'LBL_EMAIL_SETTINGS_NAME'               => 'Mail Account Name',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'Select the number of emails per page in the Inbox. This setting might require a page refresh in order to take effect.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Retrieving Mail Account',
    'LBL_EMAIL_SETTINGS_RULES'              => 'Rules',
    'LBL_EMAIL_SETTINGS_SAVED'              => 'The settings have been saved.\n\nYou must reload the page for the new settings to take effect.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => 'Send Plain Text Emails Only',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => 'Active',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'Emails per Page',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'Place Tabs at Bottom',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => 'Visual Settings',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => 'Preferences',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => 'Show Advanced',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => 'Available User Folders',
    'LBL_EMAIL_ERROR_PREPEND'               => 'Error:',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'The outbound mail server selected for the mail account you are using is invalid.  Check the settings or select a different mail server for the mail account.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'An outgoing mail server is not configured to send emails. Please configure an outgoing mail server or select an outgoing mail server for the mail account that you are using in Settings >> Mail Account.',
    'LBL_EMAIL_SHOW_READ'                   => 'Show All',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => 'Show Unread Only',
    'LBL_EMAIL_SIGNATURES'                  => 'Signatures',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'Create Signature',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'Signature Name',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'Signature Body',
  'LBL_SMTPTYPE_GMAIL'                    => 'Gmail',
  'LBL_SMTPTYPE_YAHOO'                    => 'Yahoo! Mail',
  'LBL_SMTPTYPE_EXCHANGE'                 => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER'                  => 'Other',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ Remote Folders ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ Sugar Folders ]',
    'LBL_EMAIL_SUBJECT'                     => 'Subject',
    'LBL_EMAIL_TO'                        => 'To',
    'LBL_EMAIL_SUCCESS'                     => 'Success',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'SugarFolder',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT'    => 'Email template body is empty',
    'LBL_EMAIL_TEMPLATES'                   => 'Templates',
    'LBL_EMAIL_TEXT_FIRST'                  => 'First Page',
    'LBL_EMAIL_TEXT_PREV'                   => 'Previous Page',
    'LBL_EMAIL_TEXT_NEXT'                   => 'Next Page',
    'LBL_EMAIL_TEXT_LAST'                   => 'Last Page',
    'LBL_EMAIL_TEXT_REFRESH'                => 'Refresh',
    'LBL_EMAIL_TO'                          => 'To',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'Toggle List',
    'LBL_EMAIL_VIEW'                        => 'View',
    'LBL_EMAIL_VIEWS'                       => 'Views',
    'LBL_EMAIL_VIEW_HEADERS'                => 'Display Headers',
    'LBL_EMAIL_VIEW_PRINTABLE'              => 'Printable Version',
    'LBL_EMAIL_VIEW_RAW'                    => 'Display Raw Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'This feature is unsupported when used with POP3.',
    'LBL_DEFAULT_LINK_TEXT'                 => 'Default link text.',
    'LBL_EMAIL_YES'                         => 'Yes',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS'      => 'Send Test Email',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test Email Sent',
    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => "Manually",
        '5' => 'Every 5 minutes',
        '15' => 'Every 15 minutes',
        '30' => 'Every 30 minutes',
        '60' => 'Every hour'
    ),


    'LBL_EMAIL_MESSAGE_NO'                  => 'Message No',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'Import Passed',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'Import Failed because either the message is already imported or deleted from server',

    'LBL_LINK_NONE'=> '없음',
    'LBL_LINK_ALL'=> '전부',
    'LBL_LINK_RECORDS'=> '자료',
    'LBL_LINK_SELECT'=> '선택하기',
    'LBL_LINK_ACTIONS'=> '메뉴',
    'LBL_LINK_MORE'=> '더보기',
    'LBL_CLOSE_ACTIVITY_HEADER' => "확인",
    'LBL_CLOSE_ACTIVITY_CONFIRM' => "#module#모듈을 정말로 닫겠습니까?",
    'LBL_CLOSE_ACTIVITY_REMEMBER' => "이 메세지를 다음에 표시하지 않습니다.",
    'LBL_INVALID_FILE_EXTENSION' => '올바르지 않은 파일확장자명입니다.',
    //BEGIN SUGARCRM flav=pro ONLY
    'LBL_LIST_TEAM' => '담당부서',
    'LBL_TEAM' => '담당부서:',
    'LBL_TEAMS' =>'부서목록',
    'LBL_TEAM_ID'=>'부서 ID:',
    'LBL_TEAM_SET_ID' => 'Team Set ID',
    'LBL_EXPORT_TEAM_SET_ID' => '부서목록',
    'LBL_TEAM_SET'=>'Team Set',
    'LBL_SEARCH_UNAVAILABLE' => 'Search unavailable, please try again later.',
    'ERR_NO_PRIMARY_TEAM_SPECIFIED' => 'No Primary Team specified',
    'LBL_REMOVE_PRIMARY_TEAM_ERROR' => 'Error attempting to remove primary team id [{0}] for [{1}] module with id [{2}]',
    //END SUGARCRM flav=pro ONLY
    //BEGIN SUGARCRM flav=ent ONLY
    'LBL_QUERY_VALID'=>'Valid',
    'LBL_QUERY_ERROR'=>'Error!',
    'LBL_QUERY_CHILD'=>'Valid Sub-Query',
    'LBL_CLOSE_BUTTON_KEY' => 'C',
    'LBL_CLOSE_BUTTON_LABEL' => 'Close',
    'ERROR_EXAMINE_MSG' => '  Please examine the error message below:',
    'NO_QUERY_SELECTED' => 'The data format you have selected does not contain a query.  Please select a custom query for this data format.',
    //END SUGARCRM flav=ent ONLY

    'ERR_AJAX_LOAD'     => '다음과 같은 문제가 발생하였습니다.',
    'ERR_AJAX_LOAD_FAILURE'     => '요청하신 작업을 처리하는 중에 문제가 발생하였습니다. 나중에 다시 시도해 주십시오.',
    'ERR_AJAX_LOAD_FOOTER' => '이 문제가 계속 발생하면, 관리자에게 연락하여 이 모듈의 ajax 기능을 중지하도록 요청하십시오.',
    'ERR_CREATING_FIELDS' => 'Error filling in additional detail fields: ',
    'ERR_CREATING_TABLE' => 'Error creating table: ',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "The decimal separator cannot use the same character as the thousands separator.\\n\\n  Please change the values.",
    'ERR_DELETE_RECORD' => '연락처를 지우기 위해선 자료번호를 반드시 포함하여야합니다.',
    'ERR_EXPORT_DISABLED' => 'Exports Disabled.',
    'ERR_EXPORT_TYPE' => 'Error exporting ',
    'ERR_INVALID_AMOUNT' => '올바른 금액을 입력해주세요.',
    'ERR_INVALID_DATE_FORMAT' => '날짜 형식은 다음과 같아야합니다: ',
    'ERR_INVALID_DATE' => '올바른 날짜형식을 입력해주세요.',
    'ERR_INVALID_DAY' => '올바른 일자형식을 입력해주세요.',
    'ERR_INVALID_EMAIL_ADDRESS' => '올바르지 않은 이메일 주소입니다.',
    'ERR_INVALID_FILE_REFERENCE' => 'Invalid File Reference',
    'ERR_INVALID_HOUR' => '올바른 시간을 입력해주세요.',
    'ERR_INVALID_MONTH' => '올바른 월을 입력해주세요.',
    'ERR_INVALID_TIME' => '올바른 시간을 입력해주세요.',
    'ERR_INVALID_YEAR' => '4자리 년도를 입력해주세요.',
    'ERR_NEED_ACTIVE_SESSION' => 'An active session is required to export content.',
    'ERR_NO_HEADER_ID' => '현재 항목은 선택된 테마에서는 작동하지 않습니다.',
    'ERR_NOT_ADMIN' => "관리자모드 접속 승인이 필요합니다.",
    'ERR_MISSING_REQUIRED_FIELDS' => '다음의 필수 항목을 입력하셔합니다:',
    'ERR_INVALID_REQUIRED_FIELDS' => '올바르지 않은 필수 항목을 입력하셨습니다:',
    'ERR_INVALID_VALUE' => '올바르지 않은 값을 입력하셨습니다:',
    'ERR_NO_SUCH_FILE' =>'시스템에 파일이 존재하지 않습니다.',
    'ERR_NO_SINGLE_QUOTE' => '다음 항목은 따옴표를 입력할 수 없습니다:',
    'ERR_NOTHING_SELECTED' =>'선택항목을 먼저 골라주세요.',
    'ERR_OPPORTUNITY_NAME_DUPE' => '영업기회 "%s"가 이미 존재합니다. 다른 이름을 입력해주세요.',
    'ERR_OPPORTUNITY_NAME_MISSING' => '영업기회명을 입력하지 않았습니다. 영업기회명을 입력해주세요.',
    'ERR_POTENTIAL_SEGFAULT' => '치명적인 문제가 발생하였습니다. 관리자에게 연락하여 슈가CRM본사와 문제를 해결해주십시오(ERR_POTENTIAL_SEGFAULT).',
    'ERR_SELF_REPORTING' => 'User cannot report to him or herself.',
    'ERR_SINGLE_QUOTE'  => '선택한 항목은 따옴표를 허용하지 않습니다. 다른 값을 입력해주세요.',
    'ERR_SQS_NO_MATCH_FIELD' => '다음 항목이 일치하지 않습니다: ',
    'ERR_SQS_NO_MATCH' =>'일치하는 항목이 없습니다.',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify \'key\' index in displayParams attribute for the Meta-Data definition',
    'ERR_EXISTING_PORTAL_USERNAME'=>'Error: The Portal Name is already assigned to another contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Field value is not compatible with precision value',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'An error occurred when trying to save to the external account.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => '파일 업로드중 문제가 발생했습니다. 빈파일이 아닌지 확인하여 주십시오.',
    'ERR_NO_DB' => '디비에 연결할 수 없습니다. 자세한 내용은 sugarcrm.log 파일을 확인하여 주십시오.',
    'ERR_DB_FAIL' => '디비를 처리하는 중 문제가 발생했습니다. 자세한 내용은 sugarcrm.log 파일을 확인하여 주십시오.',
    'ERR_EXTERNAL_API_403' => '파일권한이 없습니다. 선택된 파일 형식은 지원되지 않습니다.',

    //BEGIN SUGARCRM flav=pro ONLY
    //Lotus Live specific error messages
    'ERR_EXTERNAL_API_LOTUS_LIVE_CONFLICT' => '같은 이름의 파일이 존재합니다.',
    //END SUGARCRM flav=pro ONLY

    'LBL_ACCOUNT'=>'거래처',
    'LBL_OLD_ACCOUNT_LINK'=>'이전 거래처',
    'LBL_ACCOUNTS'=>'거래처',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'활동내역',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => '요약보기',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => '요약보기',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => '추가하기',
    'LBL_ADD_BUTTON' => '추가하기',
    'LBL_ADD_DOCUMENT' => '문서 추가하기',
    'LBL_REPLACE_BUTTON' => 'Replace',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => '잠재고객으로 추가하기',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => '잠재고객으로 추가하기',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => '창닫기',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => '닫기',
    'LBL_ADDITIONAL_DETAILS' => '추가세부정보',
    'LBL_ADMIN' => '관리자모드',
//BEGIN SUGARCRM flav=sales ONLY
    'LBL_USER_ADMIN' => '관리권한 사용자',
//END SUGARCRM flav=sales ONLY
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => '보관하기',
    'LBL_ASSIGNED_TO_USER'=>'담당자에게 배정됨',
    'LBL_ASSIGNED_TO' => '배정된 담당자:',
    'LBL_BACK' => '뒤로',
    'LBL_BILL_TO_ACCOUNT'=>'거래처에 청구',
    'LBL_BILL_TO_CONTACT'=>'연락처에 청구',
    'LBL_BILLING_ADDRESS'=>'청구지 주소',
    //BEGIN SUGARCRM flav=dce ONLY
    'LBL_BROWSER_TITLE' => 'Sugar DCE',
    //END SUGARCRM flav=dce ONLY
    'LBL_QUICK_CREATE_TITLE' => '빠른 추가',
    //BEGIN SUGARCRM flav!=dce ONLY
    'LBL_BROWSER_TITLE' => 'SugarCRM - Commercial Open Source CRM',
    //END SUGARCRM flav!=dce ONLY
    'LBL_BUGS'=>'결함',
    'LBL_BY' => 'by',
    'LBL_CALLS'=>'전화상담',
    'LBL_CALL'=>'전화상담',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send Queued Campaign Emails',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Submit',
    'LBL_CASE'=>'Case',
    'LBL_CASES'=>'Cases',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => '비밀번호 변경하기',
    'LBL_CHANGE_BUTTON_LABEL' => '변경하기',
    'LBL_CHANGE_BUTTON_TITLE' => '변경하기',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => '모두 선택하기',
    'LBL_CITY' => '시',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => '지우기',
    'LBL_CLEAR_BUTTON_TITLE' => '지우기',
    'LBL_CLEARALL' => '전체 선택취소',
    'LBL_CLOSE_BUTTON_TITLE' =>'닫기',
    'LBL_CLOSE_BUTTON_KEY'=>'Q',
    'LBL_CLOSE_WINDOW'=>'창닫기',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => '전체 닫기',
    'LBL_CLOSEALL_BUTTON_TITLE' => '전체 닫기',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => '완료하고 새 정보 입력하기',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => '완료하고 새 정보 입력하기',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => '이메일 작성하기',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => '이메일 작성하기',
    'LBL_SEARCH_DROPDOWN_YES'=>'예',
    'LBL_SEARCH_DROPDOWN_NO'=>'아니요',
    'LBL_CONTACT_LIST' => '연락처 목록',
    'LBL_CONTACT'=>'연락처',
    'LBL_CONTACTS'=>'연락처',
    'LBL_CONTRACTS'=>'Contracts',
    'LBL_COUNTRY' => '국가:',
    'LBL_CREATE_BUTTON_LABEL' => '생성하기',
    'LBL_CREATED_BY_USER'=>'Created by User',
    'LBL_CREATED_USER'=>'Created by User',
    'LBL_CREATED_ID' => 'Created By Id',
    'LBL_CREATED' => 'Created by',
    'LBL_CURRENT_USER_FILTER' => '내 연관자료:',
    'LBL_CURRENCY'=>'Currency:',
    'LBL_DOCUMENTS'=>'Documents',
    'LBL_DATE_ENTERED' => '생성일자:',
    'LBL_DATE_MODIFIED' => '수정일자:',
    'LBL_EDIT_BUTTON' => '수정하기',
    'LBL_DUPLICATE_BUTTON' => '복제하기',
    'LBL_DELETE_BUTTON' => '삭제하기',
    'LBL_DELETE' => '삭제하기',
    'LBL_DELETED'=>'삭제',
    'LBL_DIRECT_REPORTS'=>'Direct Reports',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => '완료하기',
    'LBL_DONE_BUTTON_TITLE' => '완료하기',
    'LBL_DST_NEEDS_FIXIN' => '현재 시스템에 일광절약시간을 적용하셔야 합니다. 다음 <a href="index.php?module=Administration&action=DstFix">링크</a>를 클릭하여 일광절약시간을 올바르게 적용해주세요.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Edit As New',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Edit As New',
    'LBL_FAVORITES' => '즐겨찾기목록',
    'LBL_FILTER_MENU_BY' => 'Filter Menu By',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Please select a vCard file',
    'LBL_IMPORT_VCARD' => 'Import vCard:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Import vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Import vCard',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'View',
    'LBL_VIEW_BUTTON_TITLE' => 'View',
    'LBL_VIEW_BUTTON' => 'View',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email as PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email as PDF',
    'LBL_EMAILS'=>'Emails',
    'LBL_EMPLOYEES' => '직원관리',
    'LBL_ENTER_DATE' => 'Enter Date',
    'LBL_EXPORT_ALL' => '전체자료 내보내기',
    'LBL_EXPORT' => '자료 내보내기',
    'LBL_FAVORITES_FILTER' => '내 즐겨찾기 목록:',
    'LBL_GO_BUTTON_LABEL' => '이동하기',
    'LBL_GS_HELP' => 'The fields in this module used in this search appear above.  The highlighted text matches your search criteria.',
    'LBL_HIDE'=>'Hide',
    'LBL_ID'=>'ID',
    'LBL_IMPORT' => '자료 가져오기',
    'LBL_IMPORT_STARTED' => 'Import Started: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => '구분자를 반드시 선택하셔야합니다.',
    'LBL_LAST_VIEWED' => '최근에 본 항목',
    'LBL_SHOW_LESS' => '메뉴 접기',
    'LBL_SHOW_MORE' => '메뉴 펼치기',
    'LBL_TODAYS_ACTIVITIES' => '오늘의 활동내역',
    'LBL_LEADS'=>'관심고객',
    'LBL_LESS' => 'less',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGNLOG' => 'CampaignLog',
    'LBL_CAMPAIGN_CONTACT'=>'Campaigns',
    'LBL_CAMPAIGN_ID'=>'campaign_id',
    'LBL_SITEMAP'=>'사이트',
    'LBL_THEME'=>'테마:',
    'LBL_THEME_PICKER'=>'Page Style',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => '경고: 선택하신 테마는 인터넷 익스플로어 6버젼을 지원하지 않습니다. 그래도 진행하시려면 확인을 눌러주시고 아니면 취소후 다른 테마를 선택해주세요.',
    'LBL_FOUND_IN_RELEASE'=>'Found In Release',
    'LBL_FIXED_IN_RELEASE'=>'Fixed In Release',
    'LBL_LIST_ACCOUNT_NAME' => '거래처이름',
    'LBL_LIST_ASSIGNED_USER' => '담당자',
    'LBL_LIST_CONTACT_NAME' => '연락처이름',
    'LBL_LIST_CONTACT_ROLE' => 'Contact Role',
    'LBL_LIST_DATE_ENTERED'=>'생성일자',
    'LBL_LIST_EMAIL' => '이메일',
    'LBL_LIST_NAME' => '이름',
    'LBL_LIST_OF' => '전체',
    'LBL_LIST_PHONE' => '전화번호',
    'LBL_LIST_RELATED_TO' => '연관된 정보',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => '정말로 전체 자료를 변경하겠습니까?',
    'LBL_LISTVIEW_NO_SELECTED' => '한개이상의 자료를 선택해주세요.',
    'LBL_LISTVIEW_TWO_REQUIRED' => '두개이상의 자료를 선택해주세요.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => '10개이하의 자료를 선택해주세요.',
    'LBL_LISTVIEW_ALL' => '전체',
    'LBL_LISTVIEW_NONE' => '모든선택취소',
    'LBL_LISTVIEW_OPTION_CURRENT' => '현재페이지 선택하기',
    'LBL_LISTVIEW_OPTION_ENTIRE' => '전체 선택하기',
    'LBL_LISTVIEW_OPTION_SELECTED' => '선택된 자료',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => '선택된 항목수: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => '길동',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => '홍',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => '이 페이지를 열기 위해서는 로그인이 필요합니다.',
    'LBL_LOGOUT' => '로그아웃',
    'LBL_PROFILE' => '개인설정관리',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Mail Merge',
    'LBL_MASS_UPDATE' => '전체 수정하기',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => '전체 수정할 항목이 존재하지 않습니다.',
    'LBL_OPT_OUT_FLAG_PRIMARY' => '수신거부된 메인 이메일 주소',
    'LBL_MEETINGS'=>'미팅',
    'LBL_MEETING'=>'미팅',
    'LBL_MEMBERS'=>'구성원들',
    'LBL_MEMBER_OF'=>'다음의 구성원',
    'LBL_MODIFIED_BY_USER'=>'Modified by User',
    'LBL_MODIFIED_USER'=>'Modified by User',
    'LBL_MODIFIED' => 'Modified by',
    'LBL_MODIFIED_NAME'=>'Modified By Name',
    'LBL_MODIFIED_ID'=>'Modified By Id',
    'LBL_MORE' => '더보기',
    'LBL_MY_ACCOUNT' => '내 설정보기',
    'LBL_NAME' => '이름',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => '신규자료 추가하기',
    'LBL_NEW_BUTTON_TITLE' => '신규자료 추가하기',
    'LBL_NEXT_BUTTON_LABEL' => '다음',
    'LBL_NONE' => '--없음--',
    'LBL_NOTES'=>'메모',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => '모두열기',
    'LBL_OPENALL_BUTTON_TITLE' => '모두열기',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Open To: ',
    'LBL_OPENTO_BUTTON_TITLE' => 'Open To:',
    'LBL_OPPORTUNITIES'=>'영업기회',
    'LBL_OPPORTUNITY_NAME' => '영업기회명',
    'LBL_OPPORTUNITY'=>'영업기회',
    'LBL_OR' => '또는',
    'LBL_LOWER_OR' => '또는',
    'LBL_PANEL_ASSIGNMENT' => '기타',
    'LBL_PANEL_ADVANCED' => '추가정보',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Range',
    'LBL_PICTURE_FILE' => '사진',
    'LBL_POSTAL_CODE' => '우편번호:',
    'LBL_PRIMARY_ADDRESS_CITY' => '시:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '국가:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '우편번호:',
    'LBL_PRIMARY_ADDRESS_STATE' => '도:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '나머지주소2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '나머지주소3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '나머지주소:',
    'LBL_PRIMARY_ADDRESS' => '기본주소:',

	'LBL_BILLING_STREET'=> '청구지주소:',
	'LBL_SHIPPING_STREET'=> '배송지주소:',

    'LBL_PRODUCT_BUNDLES'=>'Product Bundles',
    'LBL_PRODUCT_BUNDLES'=>'Product Bundles',
    'LBL_PRODUCTS'=>'Products',
    'LBL_PROJECT_TASKS'=>'Project Tasks',
    'LBL_PROJECTS'=>'Projects',
    'LBL_PROJECTS'=>'Projects',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Create Opportunity from Quote',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Create Opportunity from Quote',
    'LBL_QUOTES_SHIP_TO'=>'Quotes Ship to',
    'LBL_QUOTES'=>'Quotes',

    'LBL_RELATED' => 'Related',
    'LBL_RELATED_INFORMATION' => '연관된 정보',
    'LBL_RELATED_RECORDS' => '연관된 자료목록',
    'LBL_REMOVE' => '삭제하기',
    'LBL_REPORTS_TO' => '다음 담당자에게 보고',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => '필수항목입니다.',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => '완료',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => '다음이름으로 저장',
    'LBL_SAVE_AS_BUTTON_TITLE' => '다음이름으로 저장',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => '전체화면으로 작성하기',
    'LBL_FULL_FORM_BUTTON_TITLE' => '전체화면으로 작성하기',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => '저장 후 새 자료입력',
    'LBL_SAVE_NEW_BUTTON_TITLE' => '저장 후 새 자료입력',
    'LBL_SAVE_OBJECT' => '저장 {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => '검색하기',
    'LBL_SEARCH_BUTTON_TITLE' => '검색하기',
    'LBL_SEARCH' => '검색:',
    'LBL_SEARCH_MORE' => '더보기',
    'LBL_SEE_ALL' => '전체보기',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => '올바르지 않은 형식입니다. 이미지 파일만 가능합니다.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => '기존자료 선택하기',
    'LBL_SELECT_BUTTON_TITLE' => '기존자료 선택하기',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => '부서 추가하기',
    'LBL_SELECT_TEAMS_TITLE' => '부서 추가하기',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => '문서확인하기',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => '문서확인하기',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => '연락처 선택하기',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => '연락처 선택하기',
    'LBL_GRID_SELECTED_FILE' => '선택된 파일',
    'LBL_GRID_SELECTED_FILES' => '선택된 파일목록',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Select from Reports',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Select Reports',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => '사용자 선택하기',
    'LBL_SELECT_USER_BUTTON_TITLE' => '사용자 선택하',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => '파일 선택하기',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => '파일 선택하기',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',


    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => '사용자 선택하기',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => '사용자 선택하기',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Clear User',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Clear User',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => '거래처 선택하기',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => '거래처 선택하기',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Clear Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Clear Account',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => '홍보캠페인 선택하기',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => '홍보캠페인 선택하기',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Clear Campaign',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Clear Campaign',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => '연락처 선택하기',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => '연락처 선택하기',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => '부서 선택하기',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => '부서 선택하기',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => '이 페이지를 생성하는 사용된 자원들(queries, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => '초.',
    'LBL_SERVER_RESPONSE_TIME' => '서버 반응 시간:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => '사용된 서버 메모리: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Usage: - module: {0} - action: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => '최대 사용된 서버 메모리: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT'=>'거래처로 배송',
    'LBL_SHIP_TO_CONTACT'=>'연락처로 배송',
    'LBL_SHIPPING_ADDRESS'=>'배송지주소',
    'LBL_SHORTCUTS' => '단축키',
    'LBL_SHOW'=>'보기',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => '도:',
    'LBL_STATUS_UPDATED'=>'현재 당신의 상태가 변경되었습니다.',
    'LBL_STATUS'=>'상태:',
    'LBL_STREET'=>'동:',
    'LBL_SUBJECT' => '제목',

    'LBL_INBOUNDEMAIL_ID' => '수신 이메일 ID',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2012 SugarCRM Inc. The Program is provided AS IS, without warranty.  Licensed under <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',



    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2012 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> All Rights Reserved.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',


    'LBL_SYNC' => '동기화',
    'LBL_SYNC' => '동기화',
    'LBL_TABGROUP_ALL' => '전체',
    'LBL_TABGROUP_ACTIVITIES' => '활동내역',
    'LBL_TABGROUP_COLLABORATION' => '협업',
    'LBL_TABGROUP_HOME' => '시작',
    'LBL_TABGROUP_MARKETING' => '마케팅',
    'LBL_TABGROUP_MY_PORTALS' => '내 현황판',
    'LBL_TABGROUP_OTHER' => '기타',
    'LBL_TABGROUP_REPORTS' => '보고서',
    'LBL_TABGROUP_SALES' => '영업',
    'LBL_TABGROUP_SUPPORT' => '지원',
    'LBL_TABGROUP_TOOLS' => '도구',
    'LBL_TASKS'=>'업무내역',
    'LBL_TEAMS_LINK'=>'부서',
    'LBL_THEME_COLOR'=>'색상',
    'LBL_THEME_FONT'=>'폰트',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => '이메일 발송기록하기',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => '이메일 발송기록하기',
    'LBL_UNAUTH_ADMIN' => '관리자모드 접속 승인이 필요합니다.',
    'LBL_UNDELETE_BUTTON_LABEL' => '삭제 취소',
    'LBL_UNDELETE_BUTTON_TITLE' => '삭제 취소',
    'LBL_UNDELETE_BUTTON' => '삭제 취소',
    'LBL_UNDELETE' => '삭제 취소',
    'LBL_UNSYNC' => '동기화 취소',
    'LBL_UPDATE' => '변경저장하기',
    'LBL_USER_LIST' => 'User List',
    'LBL_USERS_SYNC'=>'Users Sync',
    'LBL_USERS'=>'Users',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'Checking for existing email entry...',
    'LBL_VERIFY_PORTAL_NAME'=>'Checking for existing portal name...',
    'LBL_VIEW_IMAGE' => '이미지 보기',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'PDF로 출력하기',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'PDF로 출력하기',


    'LNK_ABOUT' => 'SugarCRM 정보',
    'LNK_ADVANCED_SEARCH' => '고급검색',
    'LNK_BASIC_SEARCH' => '기본검색',
    'LNK_SEARCH_FTS_VIEW_ALL' => '전체검색결과보기',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => '전체보기',
    'LNK_CLOSE' => '닫기',
    'LBL_MODIFY_CURRENT_SEARCH'=> '현재 검색항목 수정하기',
    'LNK_SAVED_VIEWS' => '표시항목옵션',
    'LNK_DELETE_ALL' => '전체삭제',
    'LNK_DELETE' => '삭제',
    'LNK_EDIT' => '수정',
    'LNK_GET_LATEST'=>'최신자료',
    'LNK_GET_LATEST_TOOLTIP'=>'최신자료로 변경하기',
    'LNK_HELP' => '도움말',
    'LNK_CREATE' => '추가하기',
    'LNK_LIST_END' => '마지막',
    'LNK_LIST_NEXT' => '다음',
    'LNK_LIST_PREVIOUS' => '이전',
    'LNK_LIST_RETURN' => '목록으로',
    'LNK_LIST_START' => '처음',
    'LNK_LOAD_SIGNED'=>'서명하기',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'서명된 문서로 변경하기',
    'LNK_PRINT' => '인쇄하기',
    'LNK_BACKTOTOP' => '맨처음으로',
    'LNK_REMOVE' => '제거',
    'LNK_RESUME' => '이어하기',
    'LNK_VIEW_CHANGE_LOG' => '수정기록확인하기',


    'NTC_CLICK_BACK' => 'Please click the browser back button and fix the error.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => '선택하신 자료를 정말로 지우시겠습니까?',
    'NTC_TEMPLATE_IS_USED' => '현재 선택하신 탬플릿이 캠페인에서 사용중입니다. 정말로 지우시겠습니까?',
    'NTC_TEMPLATES_IS_USED' => "현재 선택하신 탬플릿이 캠페인에서 사용중입니다. 정말로 지우시겠습니까?\n",
    'NTC_DELETE_CONFIRMATION' => '선택하신 자료를 정말로 지우시겠습니까?',
    'NTC_DELETE_CONFIRMATION_NUM' => '다음 자료를 정말로 지우시겠습니까? ',
    'NTC_UPDATE_CONFIRMATION_NUM' => '다음 자료를 정말로 수정하시겠습니까? ',
    'NTC_DELETE_SELECTED_RECORDS' =>' selected record(s)?',
    'NTC_LOGIN_MESSAGE' => '사용자 아이디와 비밀번호를 입력해주세요.',
    'NTC_NO_ITEMS_DISPLAY' => '없음',
    'NTC_REMOVE_CONFIRMATION' => '자료 구조관계를 정말로 지우시겠습니까? 관계도를 삭제해도 자료는 지워지지 않습니다.',
    'NTC_REQUIRED' => '아이디가 필요한 항목',
    'NTC_SUPPORT_SUGARCRM' => 'SugarCRM이 이 여러분의 사업에 도움을 주셨나요? SugarCRM 오픈소스 프로젝트에 도움을 주세요. 여러분의 도움은 더 좋은 제품을 만드는데 활용됩니다. PayPal을 통해 도움을 주실 수 있습니다.',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => '환영합니다',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'LOGIN_LOGO_ERROR'=> 'Please replace the SugarCRM logos.',
    'ERROR_FULLY_EXPIRED'=> "라이센스 사용기간이 만료된지 일주일이 지났습니다. 라이센스 사용기간을 갱신하여주세요. 현재 관리자만 접속가능합니다.",
    'ERROR_LICENSE_EXPIRED'=> "라이센스 갱신이 필요합니다. 현재 관리자만 접속가능합니다.",
    'ERROR_LICENSE_VALIDATION'=> "라이센스 인증이 필요합니다. 현재 관리자만 접속가능합니다.",
  'WARN_LICENSE_SEATS'=>  "경고: 현재 적용된 라이센스의 최대 허용 접속자를 초과하였습니다. 상위 라이센스로 갱신이 필요합니다.",
  'WARN_LICENSE_SEATS_MAXED'=>  "경고: 라이센스가 허용가능한 접속사용자를 초과하였습니다.",
    'WARN_ONLY_ADMINS'=> "현재 관리자만 접속가능합니다.",
    'WARN_UNSAVED_CHANGES'=> "현재 입력하신 정보를 저장하지 않은 상태에서 페이지를 이동하려합니다. 자료를 잃어버릴 수 있습니다. 정말로 이동하시겠습니까?",
    'ERROR_NO_RECORD' => '자료를 가져오는데 문제가 발생하였습니다. 이 자료는 지워졌거나 읽기권한이 변경된 상태일 수 있습니다.',
    'ERROR_TYPE_NOT_VALID' => '에러: 형식이 올바르지 않습니다.',
    'LBL_DUP_MERGE'=>'복제된 자료찾기',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Manage Subscriptions',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Manage Subscriptions for ',
    'LBL_SUBSCRIBE'=>'구독하기',
    'LBL_UNSUBSCRIBE'=>'구독취소하기',
    // Ajax status strings
    'LBL_LOADING' => '잠시만기다려주세요 ...',
    'LBL_SEARCHING' => '검색중입니다...',
    'LBL_SAVING_LAYOUT' => '레이아웃 저장중 ...',
    'LBL_SAVED_LAYOUT' => '레이아웃이 저장되었습니다.',
    'LBL_SAVED' => '저장되었습니다.',
    'LBL_SAVING' => '저장중',
    'LBL_FAILED' => '실패하였습니다!',
    'LBL_DISPLAY_COLUMNS' => '표시되는 항목',
    'LBL_HIDE_COLUMNS' => '숨겨진 항목',
    'LBL_SEARCH_CRITERIA' => 'Search Criteria',
    'LBL_SAVED_VIEWS' => 'Saved Views',
    'LBL_PROCESSING_REQUEST'=>'처리중 ...',
    'LBL_REQUEST_PROCESSED'=>'완료됨',
    'LBL_AJAX_FAILURE' => '로딩실패',
    //BEGIN SUGARCRM flav=pro ONLY
    'LBL_OC_STATUS' => 'Offline Client Status',
    'LBL_OC_STATUS_TEXT' => 'Indicates whether or not the current user is able to use an Offline Client.',
    'LBL_OC_DEFAULT_STATUS' => '비활성화',
    //END SUGARCRM flav=pro ONLY
    'LBL_MERGE_DUPLICATES'  => '병합하기',
    'LBL_SAVED_SEARCH_SHORTCUT' => '저장된 검색옵션',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Perform a search using the search form above',
    'LBL_DETAILVIEW'=>'세부정보화면',
    'LBL_LISTVIEW'=>'리스트목록화면',
    'LBL_EDITVIEW'=>'수정작성화면',
    'LBL_SEARCHFORM'=>'검색양식',
    'LBL_SAVED_SEARCH_ERROR' => 'Please provide a name for this view.',
    'LBL_DISPLAY_LOG' => '변경기록보기',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => '세션이 만료되었습니다.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => '현재 세션이 2분안에 만료될 예정입니다. 작업중인 자료를 저장해주세요.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'세션이 만료되었습니다.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\n목차: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => '미팅',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => '연락',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => '시간: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => '장소: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => '상세정보: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\n확인을 눌러 현재 예약된 전화상담을 확인하시거나 취소를 눌러 이 메세지를 지웁니다.",
  	'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\n확인을 눌러 현재 예약된 미팅정보를 확인하시거나 취소를 눌러 이 메세지를 지웁니다.",
 	'MSG_LIST_VIEW_NO_RESULTS_BASIC' => "검색된 자료가 없습니다.",
	'MSG_LIST_VIEW_NO_RESULTS' => "<item1>로 검색된 자료가 없습니다.",
 	'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => "<item1>을 새 <item2>로 추가하기",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => "현재 저장된 자료가 없습니다. <item2> 혹은 <item3> 를 이용하여 자료를 등록해주세요.",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' =>	"<item4>하면 <item1> 모듈에 관한 내용을 확인할 수 있습니다. 더 많은 정보를 얻으시려면 사용자메뉴에 도움말을 클릭하여 문의 주세요.",

    'LBL_CLICK_HERE' => "여기를 클릭",
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => '내 즐겨찾기에 추가',
    'LBL_MARK_AS_FAVORITES' => '즐겨찾기로 표시',
    'LBL_CREATE_CONTACT' => '연락처 만들기',
    'LBL_CREATE_CASE' => '고객 요청사례 만들기',
    'LBL_CREATE_NOTE' => '메모 만들기',
    'LBL_CREATE_OPPORTUNITY' => '영업기회 만들기',
    'LBL_SCHEDULE_CALL' => '전화상담일정',
    'LBL_SCHEDULE_MEETING' => '미팅일정',
    'LBL_CREATE_TASK' => '업무내역 만들기',
    'LBL_REMOVE_FROM_FAVORITES' => '내 즐겨찾기에서 삭제',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => '입력양식 만들기',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'잠재고객 등록양식으로 저장하기',

    'LBL_PLEASE_SELECT' => '선택해 주세요',
    'LBL_REDIRECT_URL'=>'이동될 페이지 주소',
    'LBL_RELATED_CAMPAIGN' =>'연관된 캠페인',
    'LBL_ADD_ALL_LEAD_FIELDS' => '모든 항목 추가',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => '모든 항목 삭제',
    'LBL_ONLY_IMAGE_ATTACHMENT' => '이미지만 첨부 가능합니다.',
    'LBL_REMOVE' => '삭제',
    'LBL_TRAINING' => '슈가CRM 고객지원',
    'ERR_DATABASE_CONN_DROPPED'=>'디비를 실행하는중에 문제가 발생했습니다. 페이지를 새로고침 해주세요. 만약 디비 접속이 끊어진 경우 서버를 재가동 시켜주세요.',
    'ERR_MSSQL_DB_CONTEXT' =>'디비 context를 다음으로 변경합니다:',
  'ERR_MSSQL_WARNING' =>'경고:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => '경고: [[field]] 항목이 다음파일에 정의되지 않았습니다. [moduleDir] vardefs.php 파일을 확인해주세요.',
    'ERR_CANNOT_CREATE_METADATA_FILE' => '에러: [[file]] 파일이 없습니다. 해당 HTML파일을 찾을 수 없어 생성할 수 없습니다.',
  'ERR_CANNOT_FIND_MODULE' => '에러: [module] 모듈이 존재하지 않습니다.',
  'LBL_ALT_ADDRESS' => '다른 주:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Missing index in displayParams Array for: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '내 연관자료만',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Creating New Page ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You may add new content with the Add Sugar Dashlets menu option.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Are you sure you want to delete this page?',
    'LBL_SAVING_PAGE_TITLE' => 'Saving Page Title ...',
    'LBL_RETRIEVING_PAGE' => 'Retrieving Page ...',
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of Sugar Dashlets your adminstrator has set. Please remove a Sugar Dashlet to add more.',
    'LBL_ADDING_DASHLET' => 'Adding Sugar Dashlet ...',
    'LBL_ADDED_DASHLET' => 'Sugar Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove the Sugar Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing Sugar Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'Sugar Dashlet Removed',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => '페이지 추가',
    'LBL_DELETE_PAGE' => '페이지 삭제',
    'LBL_CHANGE_LAYOUT' => '레이아웃 변경',
    'LBL_RENAME_PAGE' => '페이지 이름변경',

    'LBL_LOADING_PAGE' => '로딩중입니다. 잠시만 기다려주세요...',

    'LBL_RELOAD_PAGE' => '선택한 현황판을 사용하기 위해서, <a href="javascript: window.location.reload()">여기를 클릭</a>하여 현재 페이지를 새로고침하세요.',
    'LBL_ADD_DASHLETS' => '현황판 추가하기',
    'LBL_CLOSE_DASHLETS' => '닫기',
    'LBL_OPTIONS' => '옵션',
    'LBL_NUMBER_OF_COLUMNS' => '열 갯수를 선택하세요',
    'LBL_1_COLUMN' => '1열',
    'LBL_2_COLUMN' => '2열',
    'LBL_3_COLUMN' => '3열',
    'LBL_PAGE_NAME' => '페이지 이름',

    'LBL_SEARCH_RESULTS' => '검색된 결과',
    'LBL_SEARCH_MODULES' => '모듈목록',
    'LBL_SEARCH_CHARTS' => '차트목록',
    'LBL_SEARCH_REPORT_CHARTS' => '보고서 차트',
    'LBL_SEARCH_TOOLS' => '도구목록',
    'LBL_SEARCH_HELP_TITLE' => '검색',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => '닫기',
    'LBL_SEARCH_RESULTS_FOUND' => '검색된 결과를 찾았습니다.',
    'LBL_SEARCH_RESULTS_TIME' => 'ms.',
    'ERR_BLANK_PAGE_NAME' => '페이지명을 입력해주세요.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => '이미지 없음',

    'LBL_MODULE' => '모듈',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => '왼쪽주소복사:',
    'LBL_SAVE_AND_CONTINUE' => '저장 후 다음 자료로 계속하기',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol><p><strong>Tips</strong><br><br>By using the % as a wildcard operator you can make your search more broad.  For example instead of just searching for results that equal "Apples" you could change your search to "Apples%" which would match all results that start with the word Apples but could contain other characters as well.</p>' ,

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Error: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: Unable to create monitor because metadata file is empty or file does not exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Error: There is no monitor configured for requested name',
    'ERR_UNDEFINED_METRIC' => 'Error: Unable to set value for undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Error: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitor Id',
    //BEGIN SUGARCRM flav=pro ONLY
    'LBL_TEAM_ID' => '부서 ID',
    //END SUGARCRM flav=pro ONLY
    //BEGIN SUGARCRM flav=pro || flav=sales ONLY
    'LBL_SELECT_MODULE' => '모듈 선택:',
    //END SUGARCRM flav=pro || flav=sales ONLY
    'LBL_USER_ID' => 'User Id',
    'LBL_MODULE_NAME' => 'Module Name',
    'LBL_ITEM_ID' => 'Item Id',
    'LBL_ITEM_SUMMARY' => 'Item Summary',
    'LBL_ACTION' => 'Action',
    'LBL_SESSION_ID' => 'Session Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack created for user id {0}',
    'LBL_VISIBLE' => 'Record Visible',
    'LBL_DATE_LAST_ACTION' => 'Date of Last Action',

    //BEGIN SUGARCRM flav=pro ONLY
    //Tracker Queries
    'LBL_SQL_TEXT' => 'SQL Text',
    'LBL_QUERY_HASH' => 'SQL Hash',
    'LBL_SEC_TOTAL' => 'Total Seconds',
    'LBL_SEC_AVG' => 'Average Seconds',
    'LBL_RUN_COUNT' => 'Query Count',

    //Tracker Sessions
    'LBL_CLIENT_IP' => 'Client IP Address',
    'LBL_DATE_START' => 'Date Start',
    'LBL_ACTIVE' => 'Session Active',
    'LBL_ROUNDTRIPS' => 'Action Count',
    'LBL_SECONDS' => 'Seconds Active',

    //Tracker Performance
    'LBL_DB_ROUND_TRIPS' => 'Database Roundtrips',
    'LBL_FILES_OPENED' => 'Files Accessed',
    'LBL_MEMORY_USAGE' => 'Memory Usage (bytes)',

    //Twitter Connector
    'LBL_TWITTER_DATA_LOADING' => 'Loading Twitter Connector...',
    'LBL_TWITTER_DATA_EMPTY' => 'No data availlable from Twitter',
    //END SUGARCRM flav=pro ONLY

    //BEGIN SUGARCRM flav!=com ONLY
    'LBL_PLUGIN_OUTLOOK_NAME' => 'Sugar Plug-in for Outlook',
    'LBL_PLUGIN_OUTLOOK_DESC' => 'Integrate Sugar e-mail and calendar information with Microsoft Outlook.',
    'LBL_PLUGIN_WORD_NAME' => 'Sugar Plug-in for Word',
    'LBL_PLUGIN_WORD_DESC' => 'Automatically populate information from SugarCRM into form letters, direct mail and other Microsoft documents.',
    'LBL_PLUGIN_EXCEL_NAME' => 'Sugar Plug-in for Excel',
    'LBL_PLUGIN_EXCEL_DESC' => 'Integrate Sugar with spreadsheets for better analysis of key metrics.',
    'LBL_PLUGINS_TITLE' => 'Sugar Plug-ins for Microsoft Office<sup>TM</sup>',
    'LBL_PLUGINS_DESC' => 'Read about the plug-in features within the <a href="https://www.sugarcrm.com/crm/support/documentation/SugarPlugIns">Plug-ins Documentation</a>.',
    //END SUGARCRM flav!=com ONLY

    //BEGIN SUGARCRM flav=ent ONLY
    'LBL_PLUGINS_LOTUS_TITLE' => 'Sugar Plug-ins for Lotus Notes<sup>TM</sup>',
    'LBL_PLUGIN_LOTUS_NAME' => 'Sugar Plug-in For Lotus Notes',
    'LBL_PLUGIN_LOTUS_DESC' => 'Integrate Sugar with Lotus Notes.',
    //END SUGARCRM flav=ent ONLY

    //BEGIN SUGARCRM flav=dce ONLY
    //DCE
    'LBL_DCEDEPLOY_LABEL' => 'Deploy',
    'LBL_DCEDELETE_LABEL' => 'Delete',
    'LBL_DCEUPGRADE_LABEL' => 'Upgrade',
    'LBL_DCEARCHIVE_BUTTON' => 'Archive',
    'LBL_DCECLONE_BUTTON' => 'Clone',
    'LBL_DCERECOVER_BUTTON' => 'Recover',
    'LBL_DCESUPPORTUSER_ENABLE_BUTTON' => 'Enable Support User',
    'LBL_DCESUPPORTUSER_DISABLE_BUTTON' => 'Disable Support User',
    'LBL_DCECONVERTINSTANCE_BUTTON' => 'Convert Instance',
    'LBL_DCETEMPLATE_CONVERT' => 'Convert Template',
    'LBL_DCERESTARTEMAIL_LABEL' => 'Resend Email',
    'LBL_DCERESTARTACTION_LABEL' => 'Restart Action',
    'LNK_DCEUPGRADE_SEARCH' => 'Upgrade Search',
    //END SUGARCRM flav=dce ONLY

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'is not before',
  'MSG_IS_MORE_THAN' => 'is more than',
  'MSG_IS_LESS_THAN' => 'is less than',
  'MSG_SHOULD_BE' => 'should be',
  'MSG_OR_GREATER' => 'or greater',

    'LBL_PORTAL_WELCOME_TITLE' => 'Welcome to Sugar Portal 5.1.0',
    'LBL_PORTAL_WELCOME_INFO' => 'Sugar Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to Sugar that can be deployed within any website.  Stay tuned for more customer self service features like Project Management and Forums in our future releases.',
    'LBL_LIST' => 'List',
    'LBL_CREATE_CASE' => '고객요청사례 만들기',
    'LBL_CREATE_BUG' => '결함요청사례 만들기',
    'LBL_NO_RECORDS_FOUND' => '- 발견된 자료가 없습니다 -',

    'DATA_TYPE_DUE' => '예정일자:',
    'DATA_TYPE_START' => '시작일자:',
    'DATA_TYPE_SENT' => '발송일자:',
    'DATA_TYPE_MODIFIED' => '수정일자:',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Count',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'object image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Select Date',

    'LBL_VALIDATE_RANGE' => 'is not within the valid range',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'All',

    'LBL_OPERATOR_IN_TEXT' => 'is one of the following:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'is not one of the following:',


  //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Unable to retrieve data for {0} Connector.  The service may currently be inaccessible or the configuration settings may be invalid.  Connector error message: ({1}).',
  'LBL_MERGE_CONNECTORS' => 'Get Data',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_REMOVE_MODULE_ENTRY' => 'Are you sure you want to disable connector integration for this module?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING'      => 'For optimal experience using IIS/FastCGI sapi, set fastcgi.logging to 0 in your php.ini file.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'The Global team cannot be deleted.',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS'=>'This private team [{0}] cannot be deleted until the user [{1}] is deleted.',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'You either have Abobe Flash turned off or are using an older version of the Adobe Flash Player. To get the latest version of the Flash Player, <a href="http://www.adobe.com/go/getflashplayer/">click here</a>.',
  //Collection Field
  'LBL_COLLECTION_NAME' => 'Name',
  'LBL_COLLECTION_PRIMARY' => 'Primary',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Empty required field',
    'LBL_COLLECTION_EXACT' => 'Exact',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING'      => 'For optimal experience using IIS/FastCGI sapi, set fastcgi.logging to 0 in your php.ini file.',
    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DESCRIPTION' => 'Description',

  'LBL_NONE' => '-없음-',
  'LBL_YESTERDAY'=> '어제',
  'LBL_TODAY'=>'오늘',
  'LBL_TOMORROW'=>'내일',
  'LBL_NEXT_WEEK'=> '다음주',
  'LBL_NEXT_MONDAY'=>'다음 월요일',
  'LBL_NEXT_FRIDAY'=>'다음 금요일',
  'LBL_TWO_WEEKS'=> '2주',
  'LBL_NEXT_MONTH'=> '다음달',
  'LBL_FIRST_DAY_OF_NEXT_MONTH'=> '다음달1일',
  'LBL_THREE_MONTHS'=> '3개월',
  'LBL_SIXMONTHS'=> '6개월',
  'LBL_NEXT_YEAR'=> '내년',
    'LBL_FILTERED' => 'Filtered',

    //Datetimecombo fields
    'LBL_HOURS' => 'Hours',
    'LBL_MINUTES' => 'Minutes',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Date',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Auto-Refresh',

    'LBL_DURATION_DAY' => 'day',
    'LBL_DURATION_HOUR' => 'hour',
    'LBL_DURATION_MINUTE' => 'minute',
    'LBL_DURATION_DAYS' => 'days',
    'LBL_DURATION_HOURS' => 'hours',
    'LBL_DURATION_MINUTES' => 'minutes',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Choose Month',
    'LBL_ENTER_YEAR' => 'Enter Year',
    'LBL_ENTER_VALID_YEAR' => 'Please enter a valid year',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Please enter a numeric U.S. phone number, including area code.',

    //File write error label
    'ERR_FILE_WRITE' => 'Error: Could not write file {0}.  Please check system and web server permissions.',
  'ERR_FILE_NOT_FOUND' => 'Error: Could not load file {0}.  Please check system and web server permissions.',

    'LBL_AND' => 'And',
    'LBL_BEFORE' => 'Before',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Upload From Your Computer',
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Security',
    'LBL_SHARE_PRIVATE' => 'Private',
    'LBL_SHARE_COMPANY' => 'Company',
    'LBL_SHARE_LINKABLE' => 'Linkable',
    'LBL_SHARE_PUBLIC' => 'Public',


    // Web Services REST RSS
    'LBL_RSS_FEED' => 'RSS Feed',
    'LBL_RSS_RECORDS_FOUND' => 'record(s) found',
    'ERR_RSS_INVALID_INPUT' => 'RSS is not a valid input_type',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS is not a valid response_type for this method',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs does not support the file format you provided.',

    'LBL_EMPTY' => 'Empty',
    'LBL_IS_EMPTY' => 'Is empty',
    'LBL_IS_NOT_EMPTY' => 'Is not empty',
    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"This is a sample import file which provides an example of the expected contents of a file that is ready for import."
"The file is a comma-delimited .csv file, using double-quotes as the field qualifier."

"The header row is the top-most row in the file and contains the field labels as you would see them in the application."
"These labels are used for mapping the data in the file to the fields in the application."

"Notes: The database names could also be used in the header row. This is useful when you are using phpMyAdmin or another database tool to provide an exported list of data to import."
"The column order is not critical as the import process matches the data to the appropriate fields based on the header row."


"To use this file as a template, do the following:"
"1. Remove the sample rows of data"
"2. Remove the help text that you are reading right now"
"3. Input your own data into the appropriate rows and columns"
"4. Save the file to a known location on your system"
"5. Click on the Import option from the Actions menu in the application and choose the file to upload"
   ',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned To',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Reports To ID',
    'LBL_EXPORT_FULL_NAME' => 'Full Name',
    'LBL_EXPORT_TEAM_ID' => 'Team ID',
    'LBL_EXPORT_TEAM_NAME' => 'Teams',
    'LBL_EXPORT_TEAM_SET_ID' => 'Team Set ID',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION'=> 'Navigating... ',

    'LBL_PENDING_NOTIFICATIONS' => 'Notifications',
    'LBL_ALT_ADD_TEAM_ROW' => 'Add new team row',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Remove team',
    'LBL_ALT_SPOT_SEARCH' => 'Spot Search',
    'LBL_ALT_SORT_DESC' => 'Sorted Descending',
    'LBL_ALT_SORT_ASC' => 'Sorted Ascending',
    'LBL_ALT_SORT' => 'Sort',
    'LBL_ALT_SHOW_OPTIONS' => 'Show Options',
    'LBL_ALT_HIDE_OPTIONS' => 'Hide Options',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Move selected entry to the list on the left',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Move selected entry to the list on the right',
    'LBL_ALT_MOVE_COLUMN_UP' =>'Move selected entry up in the displayed list order',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Move selected entry down in the displayed list order',
    'LBL_ALT_INFO' => 'Information',
	'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below.  Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'email address',
    'LBL_EMAIL_OPT_TITLE' => 'opted out email address',
    'LBL_EMAIL_INV_TITLE' => 'invalid email address',
    'LBL_EMAIL_PRIM_TITLE' => 'primary email address',
    'LBL_SELECT_ALL_TITLE' => 'Select all',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Select this row',
    'LBL_TEAM_SELECTED_TITLE' => 'Team Selected ',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Select to make this team primary',

    //for upload errors
    'UPLOAD_ERROR_TEXT'          => 'ERROR: There was an error during upload. Error code: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERROR: There was an error during upload. Error code: {0} - {1}. The upload_maxsize is {2} ',
    'UPLOAD_ERROR_HOME_TEXT'     => 'ERROR: There was an error during your upload, please contact an administrator for help.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Edit',
    'LBL_EDIT_BUTTON_TITLE' => 'Edit',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplicate',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplicate',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Delete',
    'LBL_DELETE_BUTTON_TITLE' => 'Delete',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Save',
    'LBL_SAVE_BUTTON_TITLE' => 'Save',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Cancel',
    'LBL_CANCEL_BUTTON_TITLE' => 'Cancel',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Keyboard Shortcuts',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Form Functionality - Alt+</strong><br/> I = ed<b>I</b>t (detailview)<br/> U = d<b>U</b>plicate (detailview)<br/> D = <b>D</b>elete (detailview)<br/> A = s<b>A</b>ve (editview)<br/> L = cance<b>L</b> (editview) <br/><br/></p><p><strong>Search and Navigation  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>' ,

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    );

$app_list_strings['moduleList']['Library'] = 'Library';
$app_list_strings['library_type'] = array('Books'=>'Book', 'Music'=>'Music', 'DVD'=>'DVD', 'Magazines'=>'Magazines');
$app_list_strings['moduleList']['EmailAddresses'] = 'Email Address';
$app_list_strings['project_priority_default'] = 'Medium';
$app_list_strings['project_priority_options'] = array (
    'High' => 'High',
    'Medium' => 'Medium',
    'Low' => 'Low',
);


$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Draft',
    'Expired' => 'Expired',
    'In Review' => 'In Review',
    'Published' => 'Published',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => '--Admin Actions--',
    'Create New Tag' => 'Create New Tag',
    'Delete Tag'=>'Delete Tag',
    'Rename Tag'=>'Rename Tag',
    'Move Selected Articles'=>'Move Selected Articles',
    'Apply Tags On Articles'=>'Apply Tags To Articles',
    'Delete Selected Articles'=>'Delete Selected Articles',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => 'Has Attachments',
        'none' => 'Has None',
        'mime' => 'Specify Mime Type',
        'name' => 'Specify Name',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'Knowledge Base';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Create Article';
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => 'Top 5',
    'Top_10' => 'Top 10',
    'Top_20' => 'Top 20',
    'Bot_5'  => 'Bottom 5',
    'Bot_10' => 'Bottom 10',
    'Bot_20' => 'Bottom 20',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'All',
        'added' => 'Added Last 30 days',
        'pending' => 'Pending my Approval',
        'updated' =>'Updated Last 30 days',
        'faqs' => 'FAQs',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => 'On',
    'before' => 'Before',
    'after' => 'After',
    'between_dates' => 'Is Between',
    'last_7_days' => 'Last 7 Days',
    'next_7_days' => 'Next 7 Days',
    'last_month' => 'Last Month',
    'this_month' => 'This Month',
    'next_month' => 'Next Month',
    'last_30_days' => 'Last 30 Days',
    'next_30_days' => 'Next 30 Days',
    'last_year' => 'Last Year',
    'this_year' => 'This Year',
    'next_year' => 'Next Year',
    'isnull' => 'Is Null',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DHABI',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'AFGHANISTAN',
        'ALBANIA' => 'ALBANIA',
        'ALGERIA' => 'ALGERIA',
        'AMERICAN SAMOA' => 'AMERICAN SAMOA',
        'ANDORRA' => 'ANDORRA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTARCTICA',
        'ANTIGUA' => 'ANTIGUA',
        'ARGENTINA' => 'ARGENTINA',
        'ARMENIA' => 'ARMENIA',
        'ARUBA' => 'ARUBA',
        'AUSTRALIA' => 'AUSTRALIA',
        'AUSTRIA' => 'AUSTRIA',
        'AZERBAIJAN' => 'AZERBAIJAN',
        'BAHAMAS' => 'BAHAMAS',
        'BAHRAIN' => 'BAHRAIN',
        'BANGLADESH' => 'BANGLADESH',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'BELARUS',
        'BELGIUM' => 'BELGIUM',
        'BELIZE' => 'BELIZE',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDA',
        'BHUTAN' => 'BHUTAN',
        'BOLIVIA' => 'BOLIVIA',
        'BOSNIA' => 'BOSNIA',
        'BOTSWANA' => 'BOTSWANA',
        'BOUVET ISLAND' => 'BOUVET ISLAND',
        'BRAZIL' => 'BRAZIL',
        'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
        'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
        'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
        'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'BULGARIA',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'CAMBODIA',
        'CAMEROON' => 'CAMEROON',
        'CANADA' => 'CANADA',
        'CANAL ZONE' => 'CANAL ZONE',
        'CANARY ISLAND' => 'CANARY ISLAND',
        'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
        'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
        'CEVLON' => 'CEVLON',
        'CHAD' => 'CHAD',
        'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
        'CHILE' => 'CHILE',
        'CHINA' => 'CHINA',
        'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
        'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
        'COLOMBIA' => 'COLOMBIA',
        'COMORO ISLANDS' => 'COMORO ISLANDS',
        'CONGO' => 'CONGO',
        'CONGO KINSHASA' => 'CONGO KINSHASA',
        'COOK ISLANDS' => 'COOK ISLANDS',
        'COSTA RICA' => 'COSTA RICA',
        'CROATIA' => 'CROATIA',
        'CUBA' => 'CUBA',
        'CURACAO' => 'CURACAO',
        'CYPRUS' => 'CYPRUS',
        'CZECH REPUBLIC' => 'CZECH REPUBLIC',
        'DAHOMEY' => 'DAHOMEY',
        'DENMARK' => 'DENMARK',
        'DJIBOUTI' => 'DJIBOUTI',
        'DOMINICA' => 'DOMINICA',
        'DOMINICAN REPUBLIC' => 'DOMINICAN REPUBLIC',
        'DUBAI' => 'DUBAI',
        'ECUADOR' => 'ECUADOR',
        'EGYPT' => 'EGYPT',
        'EL SALVADOR' => 'EL SALVADOR',
        'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
        'ESTONIA' => 'ESTONIA',
        'ETHIOPIA' => 'ETHIOPIA',
        'FAEROE ISLANDS' => 'FAEROE ISLANDS',
        'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
        'FIJI' => 'FIJI',
        'FINLAND' => 'FINLAND',
        'FRANCE' => 'FRANCE',
        'FRENCH GUIANA' => 'FRENCH GUIANA',
        'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
        'GABON' => 'GABON',
        'GAMBIA' => 'GAMBIA',
        'GEORGIA' => 'GEORGIA',
        'GERMANY' => 'GERMANY',
        'GHANA' => 'GHANA',
        'GIBRALTAR' => 'GIBRALTAR',
        'GREECE' => 'GREECE',
        'GREENLAND' => 'GREENLAND',
        'GUADELOUPE' => 'GUADELOUPE',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'GUATEMALA',
        'GUINEA' => 'GUINEA',
        'GUYANA' => 'GUYANA',
        'HAITI' => 'HAITI',
        'HONDURAS' => 'HONDURAS',
        'HONG KONG' => 'HONG KONG',
        'HUNGARY' => 'HUNGARY',
        'ICELAND' => 'ICELAND',
        'IFNI' => 'IFNI',
        'INDIA' => 'INDIA',
        'INDONESIA' => 'INDONESIA',
        'IRAN' => 'IRAN',
        'IRAQ' => 'IRAQ',
        'IRELAND' => 'IRELAND',
        'ISRAEL' => 'ISRAEL',
        'ITALY' => 'ITALY',
        'IVORY COAST' => 'IVORY COAST',
        'JAMAICA' => 'JAMAICA',
        'JAPAN' => 'JAPAN',
        'JORDAN' => 'JORDAN',
        'KAZAKHSTAN' => 'KAZAKHSTAN',
        'KENYA' => 'KENYA',
        'KOREA' => 'KOREA',
        'KOREA, SOUTH' => 'KOREA, SOUTH',
        'KUWAIT' => 'KUWAIT',
        'KYRGYZSTAN' => 'KYRGYZSTAN',
        'LAOS' => 'LAOS',
        'LATVIA' => 'LATVIA',
        'LEBANON' => 'LEBANON',
        'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
        'LESOTHO' => 'LESOTHO',
        'LIBYA' => 'LIBYA',
        'LIECHTENSTEIN' => 'LIECHTENSTEIN',
        'LITHUANIA' => 'LITHUANIA',
        'LUXEMBOURG' => 'LUXEMBOURG',
        'MACAO' => 'MACAO',
        'MACEDONIA' => 'MACEDONIA',
        'MADAGASCAR' => 'MADAGASCAR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'MALAYSIA',
        'MALDIVES' => 'MALDIVES',
        'MALI' => 'MALI',
        'MALTA' => 'MALTA',
        'MARTINIQUE' => 'MARTINIQUE',
        'MAURITANIA' => 'MAURITANIA',
        'MAURITIUS' => 'MAURITIUS',
        'MELANESIA' => 'MELANESIA',
        'MEXICO' => 'MEXICO',
        'MOLDOVIA' => 'MOLDOVIA',
        'MONACO' => 'MONACO',
        'MONGOLIA' => 'MONGOLIA',
        'MOROCCO' => 'MOROCCO',
        'MOZAMBIQUE' => 'MOZAMBIQUE',
        'MYANAMAR' => 'MYANAMAR',
        'NAMIBIA' => 'NAMIBIA',
        'NEPAL' => 'NEPAL',
        'NETHERLANDS' => 'NETHERLANDS',
        'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
        'NEW CALADONIA' => 'NEW CALADONIA',
        'NEW HEBRIDES' => 'NEW HEBRIDES',
        'NEW ZEALAND' => 'NEW ZEALAND',
        'NICARAGUA' => 'NICARAGUA',
        'NIGER' => 'NIGER',
        'NIGERIA' => 'NIGERIA',
        'NORFOLK ISLAND' => 'NORFOLK ISLAND',
        'NORWAY' => 'NORWAY',
        'OMAN' => 'OMAN',
        'OTHER' => 'OTHER',
        'PACIFIC ISLAND' => 'PACIFIC ISLAND',
        'PAKISTAN' => 'PAKISTAN',
        'PANAMA' => 'PANAMA',
        'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
        'PARAGUAY' => 'PARAGUAY',
        'PERU' => 'PERU',
        'PHILIPPINES' => 'PHILIPPINES',
        'POLAND' => 'POLAND',
        'PORTUGAL' => 'PORTUGAL',
        'PORTUGUESE TIMOR' => 'PORTUGUESE TIMOR',
        'PUERTO RICO' => 'PUERTO RICO',
        'QATAR' => 'QATAR',
        'REPUBLIC OF BELARUS' => 'REPUBLIC OF BELARUS',
        'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIC OF SOUTH AFRICA',
        'REUNION' => 'REUNION',
        'ROMANIA' => 'ROMANIA',
        'RUSSIA' => 'RUSSIA',
        'RWANDA' => 'RWANDA',
        'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
        'SABAH' => 'SABAH',
        'SAN MARINO' => 'SAN MARINO',
        'SAUDI ARABIA' => 'SAUDI ARABIA',
        'SENEGAL' => 'SENEGAL',
        'SERBIA' => 'SERBIA',
        'SEYCHELLES' => 'SEYCHELLES',
        'SIERRA LEONE' => 'SIERRA LEONE',
        'SINGAPORE' => 'SINGAPORE',
        'SLOVAKIA' => 'SLOVAKIA',
        'SLOVENIA' => 'SLOVENIA',
        'SOMALILIAND' => 'SOMALILIAND',
        'SOUTH AFRICA' => 'SOUTH AFRICA',
        'SOUTH YEMEN' => 'SOUTH YEMEN',
        'SPAIN' => 'SPAIN',
        'SPANISH SAHARA' => 'SPANISH SAHARA',
        'SRI LANKA' => 'SRI LANKA',
        'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
        'ST. LUCIA' => 'ST. LUCIA',
        'SUDAN' => 'SUDAN',
        'SURINAM' => 'SURINAM',
        'SW AFRICA' => 'SW AFRICA',
        'SWAZILAND' => 'SWAZILAND',
        'SWEDEN' => 'SWEDEN',
        'SWITZERLAND' => 'SWITZERLAND',
        'SYRIA' => 'SYRIA',
        'TAIWAN' => 'TAIWAN',
        'TAJIKISTAN' => 'TAJIKISTAN',
        'TANZANIA' => 'TANZANIA',
        'THAILAND' => 'THAILAND',
        'TONGA' => 'TONGA',
        'TRINIDAD' => 'TRINIDAD',
        'TUNISIA' => 'TUNISIA',
        'TURKEY' => 'TURKEY',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'UKRAINE',
        'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES',
        'UNITED KINGDOM' => 'UNITED KINGDOM',
        'UPPER VOLTA' => 'UPPER VOLTA',
        'URUGUAY' => 'URUGUAY',
        'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
        'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
        'USA' => 'USA',
        'UZBEKISTAN' => 'UZBEKISTAN',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'VATICAN CITY',
        'VENEZUELA' => 'VENEZUELA',
        'VIETNAM' => 'VIETNAM',
        'WAKE ISLAND' => 'WAKE ISLAND',
        'WEST INDIES' => 'WEST INDIES',
        'WESTERN SAHARA' => 'WESTERN SAHARA',
        'YEMEN' => 'YEMEN',
        'ZAIRE' => 'ZAIRE',
        'ZAMBIA' => 'ZAMBIA',
        'ZIMBABWE' => 'ZIMBABWE',
    );

  $app_list_strings['charset_dom'] = array(
    'BIG-5'     => 'BIG-5 (Taiwan and Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251'    => 'CP1251 (MS Cyrillic)',
    'CP1252'    => 'CP1252 (MS Western European & US)',
    'EUC-CN'    => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP'    => 'EUC-JP (Unix Japanese)',
    'EUC-KR'    => 'EUC-KR (Korean)',
    'EUC-TW'    => 'EUC-TW (Taiwanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
    'ISO-8859-1'  => 'ISO-8859-1 (Western European and US)',
    'ISO-8859-2'  => 'ISO-8859-2 (Central and Eastern European)',
    'ISO-8859-3'  => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4'  => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5'  => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6'  => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7'  => 'ISO-8859-7 (Greek)',
    'ISO-8859-8'  => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9'  => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R'    => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U'    => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS'      => 'SJIS (MS Japanese)',
    'UTF-8'     => 'UTF-8',
  );

  $app_list_strings['timezone_dom'] = array(

      'Africa/Algiers' => 'Africa/Algiers',
  'Africa/Luanda' => 'Africa/Luanda',
  'Africa/Porto-Novo' => 'Africa/Porto-Novo',
  'Africa/Gaborone' => 'Africa/Gaborone',
  'Africa/Ouagadougou' => 'Africa/Ouagadougou',
  'Africa/Bujumbura' => 'Africa/Bujumbura',
  'Africa/Douala' => 'Africa/Douala',
  'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
  'Africa/Bangui' => 'Africa/Bangui',
  'Africa/Ndjamena' => 'Africa/Ndjamena',
  'Indian/Comoro' => 'Indian/Comoro',
  'Africa/Kinshasa' => 'Africa/Kinshasa',
  'Africa/Lubumbashi' => 'Africa/Lubumbashi',
  'Africa/Brazzaville' => 'Africa/Brazzaville',
  'Africa/Abidjan' => 'Africa/Abidjan',
  'Africa/Djibouti' => 'Africa/Djibouti',
  'Africa/Cairo' => 'Africa/Cairo',
  'Africa/Malabo' => 'Africa/Malabo',
  'Africa/Asmera' => 'Africa/Asmera',
  'Africa/Addis_Ababa' => 'Africa/Addis_Ababa',
  'Africa/Libreville' => 'Africa/Libreville',
  'Africa/Banjul' => 'Africa/Banjul',
  'Africa/Accra' => 'Africa/Accra',
  'Africa/Conakry' => 'Africa/Conakry',
  'Africa/Bissau' => 'Africa/Bissau',
  'Africa/Nairobi' => 'Africa/Nairobi',
  'Africa/Maseru' => 'Africa/Maseru',
  'Africa/Monrovia' => 'Africa/Monrovia',
  'Africa/Tripoli' => 'Africa/Tripoli',
  'Indian/Antananarivo' => 'Indian/Antananarivo',
  'Africa/Blantyre' => 'Africa/Blantyre',
  'Africa/Bamako' => 'Africa/Bamako',
  'Africa/Nouakchott' => 'Africa/Nouakchott',
  'Indian/Mauritius' => 'Indian/Mauritius',
  'Indian/Mayotte' => 'Indian/Mayotte',
  'Africa/Casablanca' => 'Africa/Casablanca',
  'Africa/El_Aaiun' => 'Africa/El_Aaiun',
  'Africa/Maputo' => 'Africa/Maputo',
  'Africa/Windhoek' => 'Africa/Windhoek',
  'Africa/Niamey' => 'Africa/Niamey',
  'Africa/Lagos' => 'Africa/Lagos',
  'Indian/Reunion' => 'Indian/Reunion',
  'Africa/Kigali' => 'Africa/Kigali',
  'Atlantic/St_Helena' => 'Atlantic/St_Helena',
  'Africa/Sao_Tome' => 'Africa/Sao_Tome',
  'Africa/Dakar' => 'Africa/Dakar',
  'Indian/Mahe' => 'Indian/Mahe',
  'Africa/Freetown' => 'Africa/Freetown',
  'Africa/Mogadishu' => 'Africa/Mogadishu',
  'Africa/Johannesburg' => 'Africa/Johannesburg',
  'Africa/Khartoum' => 'Africa/Khartoum',
  'Africa/Mbabane' => 'Africa/Mbabane',
  'Africa/Dar_es_Salaam' => 'Africa/Dar_es_Salaam',
  'Africa/Lome' => 'Africa/Lome',
  'Africa/Tunis' => 'Africa/Tunis',
  'Africa/Kampala' => 'Africa/Kampala',
  'Africa/Lusaka' => 'Africa/Lusaka',
  'Africa/Harare' => 'Africa/Harare',
  'Antarctica/Casey' => 'Antarctica/Casey',
  'Antarctica/Davis' => 'Antarctica/Davis',
  'Antarctica/Mawson' => 'Antarctica/Mawson',
  'Indian/Kerguelen' => 'Indian/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
  'Antarctica/Syowa' => 'Antarctica/Syowa',
  'Antarctica/Vostok' => 'Antarctica/Vostok',
  'Antarctica/Rothera' => 'Antarctica/Rothera',
  'Antarctica/Palmer' => 'Antarctica/Palmer',
  'Antarctica/McMurdo' => 'Antarctica/McMurdo',
  'Asia/Kabul' => 'Asia/Kabul',
  'Asia/Yerevan' => 'Asia/Yerevan',
  'Asia/Baku' => 'Asia/Baku',
  'Asia/Bahrain' => 'Asia/Bahrain',
  'Asia/Dhaka' => 'Asia/Dhaka',
  'Asia/Thimphu' => 'Asia/Thimphu',
  'Indian/Chagos' => 'Indian/Chagos',
  'Asia/Brunei' => 'Asia/Brunei',
  'Asia/Rangoon' => 'Asia/Rangoon',
  'Asia/Phnom_Penh' => 'Asia/Phnom_Penh',
  'Asia/Beijing' => 'Asia/Beijing',
  'Asia/Harbin' => 'Asia/Harbin',
  'Asia/Shanghai' => 'Asia/Shanghai',
  'Asia/Chongqing' => 'Asia/Chongqing',
  'Asia/Urumqi' => 'Asia/Urumqi',
  'Asia/Kashgar' => 'Asia/Kashgar',
  'Asia/Hong_Kong' => 'Asia/Hong_Kong',
  'Asia/Taipei' => 'Asia/Taipei',
  'Asia/Macau' => 'Asia/Macau',
  'Asia/Nicosia' => 'Asia/Nicosia',
  'Asia/Tbilisi' => 'Asia/Tbilisi',
  'Asia/Dili' => 'Asia/Dili',
  'Asia/Calcutta' => 'Asia/Calcutta',
  'Asia/Jakarta' => 'Asia/Jakarta',
  'Asia/Pontianak' => 'Asia/Pontianak',
  'Asia/Makassar' => 'Asia/Makassar',
  'Asia/Jayapura' => 'Asia/Jayapura',
  'Asia/Tehran' => 'Asia/Tehran',
  'Asia/Baghdad' => 'Asia/Baghdad',
  'Asia/Jerusalem' => 'Asia/Jerusalem',
  'Asia/Tokyo' => 'Asia/Tokyo',
  'Asia/Amman' => 'Asia/Amman',
  'Asia/Almaty' => 'Asia/Almaty',
  'Asia/Qyzylorda' => 'Asia/Qyzylorda',
  'Asia/Aqtobe' => 'Asia/Aqtobe',
  'Asia/Aqtau' => 'Asia/Aqtau',
  'Asia/Oral' => 'Asia/Oral',
  'Asia/Bishkek' => 'Asia/Bishkek',
  'Asia/Seoul' => 'Asia/Seoul',
  'Asia/Pyongyang' => 'Asia/Pyongyang',
  'Asia/Kuwait' => 'Asia/Kuwait',
  'Asia/Vientiane' => 'Asia/Vientiane',
  'Asia/Beirut' => 'Asia/Beirut',
  'Asia/Kuala_Lumpur' => 'Asia/Kuala_Lumpur',
  'Asia/Kuching' => 'Asia/Kuching',
  'Indian/Maldives' => 'Indian/Maldives',
  'Asia/Hovd' => 'Asia/Hovd',
  'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
  'Asia/Choibalsan' => 'Asia/Choibalsan',
  'Asia/Katmandu' => 'Asia/Katmandu',
  'Asia/Muscat' => 'Asia/Muscat',
  'Asia/Karachi' => 'Asia/Karachi',
  'Asia/Gaza' => 'Asia/Gaza',
  'Asia/Manila' => 'Asia/Manila',
  'Asia/Qatar' => 'Asia/Qatar',
  'Asia/Riyadh' => 'Asia/Riyadh',
  'Asia/Singapore' => 'Asia/Singapore',
  'Asia/Colombo' => 'Asia/Colombo',
  'Asia/Damascus' => 'Asia/Damascus',
  'Asia/Dushanbe' => 'Asia/Dushanbe',
  'Asia/Bangkok' => 'Asia/Bangkok',
  'Asia/Ashgabat' => 'Asia/Ashgabat',
  'Asia/Dubai' => 'Asia/Dubai',
  'Asia/Samarkand' => 'Asia/Samarkand',
  'Asia/Tashkent' => 'Asia/Tashkent',
  'Asia/Saigon' => 'Asia/Saigon',
  'Asia/Aden' => 'Asia/Aden',
  'Australia/Darwin' => 'Australia/Darwin',
  'Australia/Perth' => 'Australia/Perth',
  'Australia/Brisbane' => 'Australia/Brisbane',
  'Australia/Lindeman' => 'Australia/Lindeman',
  'Australia/Adelaide' => 'Australia/Adelaide',
  'Australia/Hobart' => 'Australia/Hobart',
  'Australia/Currie' => 'Australia/Currie',
  'Australia/Melbourne' => 'Australia/Melbourne',
  'Australia/Sydney' => 'Australia/Sydney',
  'Australia/Broken_Hill' => 'Australia/Broken_Hill',
  'Indian/Christmas' => 'Indian/Christmas',
  'Pacific/Rarotonga' => 'Pacific/Rarotonga',
  'Indian/Cocos' => 'Indian/Cocos',
  'Pacific/Fiji' => 'Pacific/Fiji',
  'Pacific/Gambier' => 'Pacific/Gambier',
  'Pacific/Marquesas' => 'Pacific/Marquesas',
  'Pacific/Tahiti' => 'Pacific/Tahiti',
  'Pacific/Guam' => 'Pacific/Guam',
  'Pacific/Tarawa' => 'Pacific/Tarawa',
  'Pacific/Enderbury' => 'Pacific/Enderbury',
  'Pacific/Kiritimati' => 'Pacific/Kiritimati',
  'Pacific/Saipan' => 'Pacific/Saipan',
  'Pacific/Majuro' => 'Pacific/Majuro',
  'Pacific/Kwajalein' => 'Pacific/Kwajalein',
  'Pacific/Truk' => 'Pacific/Truk',
  'Pacific/Ponape' => 'Pacific/Ponape',
  'Pacific/Kosrae' => 'Pacific/Kosrae',
  'Pacific/Nauru' => 'Pacific/Nauru',
  'Pacific/Noumea' => 'Pacific/Noumea',
  'Pacific/Auckland' => 'Pacific/Auckland',
  'Pacific/Chatham' => 'Pacific/Chatham',
  'Pacific/Niue' => 'Pacific/Niue',
  'Pacific/Norfolk' => 'Pacific/Norfolk',
  'Pacific/Palau' => 'Pacific/Palau',
  'Pacific/Port_Moresby' => 'Pacific/Port_Moresby',
  'Pacific/Pitcairn' => 'Pacific/Pitcairn',
  'Pacific/Pago_Pago' => 'Pacific/Pago_Pago',
  'Pacific/Apia' => 'Pacific/Apia',
  'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
  'Pacific/Fakaofo' => 'Pacific/Fakaofo',
  'Pacific/Tongatapu' => 'Pacific/Tongatapu',
  'Pacific/Funafuti' => 'Pacific/Funafuti',
  'Pacific/Johnston' => 'Pacific/Johnston',
  'Pacific/Midway' => 'Pacific/Midway',
  'Pacific/Wake' => 'Pacific/Wake',
  'Pacific/Efate' => 'Pacific/Efate',
  'Pacific/Wallis' => 'Pacific/Wallis',
  'Europe/London' => 'Europe/London',
  'Europe/Dublin' => 'Europe/Dublin',
  'WET' => 'WET',
  'CET' => 'CET',
  'MET' => 'MET',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europe/Tirane',
  'Europe/Andorra' => 'Europe/Andorra',
  'Europe/Vienna' => 'Europe/Vienna',
  'Europe/Minsk' => 'Europe/Minsk',
  'Europe/Brussels' => 'Europe/Brussels',
  'Europe/Sofia' => 'Europe/Sofia',
  'Europe/Prague' => 'Europe/Prague',
  'Europe/Copenhagen' => 'Europe/Copenhagen',
  'Atlantic/Faeroe' => 'Atlantic/Faeroe',
  'America/Danmarkshavn' => 'America/Danmarkshavn',
  'America/Scoresbysund' => 'America/Scoresbysund',
  'America/Godthab' => 'America/Godthab',
  'America/Thule' => 'America/Thule',
  'Europe/Tallinn' => 'Europe/Tallinn',
  'Europe/Helsinki' => 'Europe/Helsinki',
  'Europe/Paris' => 'Europe/Paris',
  'Europe/Berlin' => 'Europe/Berlin',
  'Europe/Gibraltar' => 'Europe/Gibraltar',
  'Europe/Athens' => 'Europe/Athens',
  'Europe/Budapest' => 'Europe/Budapest',
  'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
  'Europe/Rome' => 'Europe/Rome',
  'Europe/Riga' => 'Europe/Riga',
  'Europe/Vaduz' => 'Europe/Vaduz',
  'Europe/Vilnius' => 'Europe/Vilnius',
  'Europe/Luxembourg' => 'Europe/Luxembourg',
  'Europe/Malta' => 'Europe/Malta',
  'Europe/Chisinau' => 'Europe/Chisinau',
  'Europe/Monaco' => 'Europe/Monaco',
  'Europe/Amsterdam' => 'Europe/Amsterdam',
  'Europe/Oslo' => 'Europe/Oslo',
  'Europe/Warsaw' => 'Europe/Warsaw',
  'Europe/Lisbon' => 'Europe/Lisbon',
  'Atlantic/Azores' => 'Atlantic/Azores',
  'Atlantic/Madeira' => 'Atlantic/Madeira',
  'Europe/Bucharest' => 'Europe/Bucharest',
  'Europe/Kaliningrad' => 'Europe/Kaliningrad',
  'Europe/Moscow' => 'Europe/Moscow',
  'Europe/Samara' => 'Europe/Samara',
  'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
  'Asia/Omsk' => 'Asia/Omsk',
  'Asia/Novosibirsk' => 'Asia/Novosibirsk',
  'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
  'Asia/Irkutsk' => 'Asia/Irkutsk',
  'Asia/Yakutsk' => 'Asia/Yakutsk',
  'Asia/Vladivostok' => 'Asia/Vladivostok',
  'Asia/Sakhalin' => 'Asia/Sakhalin',
  'Asia/Magadan' => 'Asia/Magadan',
  'Asia/Kamchatka' => 'Asia/Kamchatka',
  'Asia/Anadyr' => 'Asia/Anadyr',
  'Europe/Belgrade' => 'Europe/Belgrade' ,
  'Europe/Madrid' =>'Europe/Madrid' ,
  'Africa/Ceuta' => 'Africa/Ceuta',
  'Atlantic/Canary' => 'Atlantic/Canary',
  'Europe/Stockholm' => 'Europe/Stockholm',
  'Europe/Zurich' => 'Europe/Zurich' ,
  'Europe/Istanbul' => 'Europe/Istanbul',
  'Europe/Kiev' => 'Europe/Kiev',
  'Europe/Uzhgorod' => 'Europe/Uzhgorod',
  'Europe/Zaporozhye' => 'Europe/Zaporozhye',
  'Europe/Simferopol' => 'Europe/Simferopol',
  'America/New_York' => 'America/New_York',
  'America/Chicago' =>'America/Chicago' ,
  'America/North_Dakota/Center' => 'America/North_Dakota/Center',
  'America/Denver' => 'America/Denver',
  'America/Los_Angeles' => 'America/Los_Angeles',
  'America/Juneau' => 'America/Juneau',
  'America/Yakutat' => 'America/Yakutat',
  'America/Anchorage' => 'America/Anchorage',
  'America/Nome' =>'America/Nome' ,
  'America/Adak' => 'America/Adak',
  'Pacific/Honolulu' => 'Pacific/Honolulu',
  'America/Phoenix' => 'America/Phoenix',
  'America/Boise' => 'America/Boise',
  'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'America/Indiana/Marengo',
  'America/Indiana/Knox' =>  'America/Indiana/Knox',
  'America/Indiana/Vevay' => 'America/Indiana/Vevay',
  'America/Kentucky/Louisville' =>'America/Kentucky/Louisville'  ,
  'America/Kentucky/Monticello' =>  'America/Kentucky/Monticello' ,
  'America/Detroit' => 'America/Detroit',
  'America/Menominee' => 'America/Menominee',
  'America/St_Johns' => 'America/St_Johns',
  'America/Goose_Bay' => 'America/Goose_Bay' ,
  'America/Halifax' => 'America/Halifax',
  'America/Glace_Bay' =>'America/Glace_Bay' ,
  'America/Montreal' => 'America/Montreal',
  'America/Toronto' => 'America/Toronto',
  'America/Thunder_Bay' => 'America/Thunder_Bay' ,
  'America/Nipigon' => 'America/Nipigon',
  'America/Rainy_River' => 'America/Rainy_River',
  'America/Winnipeg' => 'America/Winnipeg',
  'America/Regina' => 'America/Regina',
  'America/Swift_Current' => 'America/Swift_Current',
  'America/Edmonton' =>  'America/Edmonton',
  'America/Vancouver' => 'America/Vancouver',
  'America/Dawson_Creek' => 'America/Dawson_Creek',
  'America/Pangnirtung' => 'America/Pangnirtung'  ,
  'America/Iqaluit' => 'America/Iqaluit' ,
  'America/Coral_Harbour' => 'America/Coral_Harbour' ,
  'America/Rankin_Inlet' => 'America/Rankin_Inlet',
  'America/Cambridge_Bay' => 'America/Cambridge_Bay',
  'America/Yellowknife' => 'America/Yellowknife',
  'America/Inuvik' =>'America/Inuvik' ,
  'America/Whitehorse' => 'America/Whitehorse' ,
  'America/Dawson' => 'America/Dawson',
  'America/Cancun' => 'America/Cancun',
  'America/Merida' => 'America/Merida',
  'America/Monterrey' => 'America/Monterrey',
  'America/Mexico_City' => 'America/Mexico_City',
  'America/Chihuahua' => 'America/Chihuahua',
  'America/Hermosillo' => 'America/Hermosillo',
  'America/Mazatlan' => 'America/Mazatlan',
  'America/Tijuana' => 'America/Tijuana',
  'America/Anguilla' => 'America/Anguilla',
  'America/Antigua' => 'America/Antigua',
  'America/Nassau' =>'America/Nassau' ,
  'America/Barbados' => 'America/Barbados',
  'America/Belize' => 'America/Belize',
  'Atlantic/Bermuda' => 'Atlantic/Bermuda',
  'America/Cayman' => 'America/Cayman',
  'America/Costa_Rica' => 'America/Costa_Rica',
  'America/Havana' => 'America/Havana',
  'America/Dominica' => 'America/Dominica',
  'America/Santo_Domingo' => 'America/Santo_Domingo',
  'America/El_Salvador' => 'America/El_Salvador',
  'America/Grenada' => 'America/Grenada',
  'America/Guadeloupe' => 'America/Guadeloupe',
  'America/Guatemala' => 'America/Guatemala',
  'America/Port-au-Prince' => 'America/Port-au-Prince',
  'America/Tegucigalpa' => 'America/Tegucigalpa',
  'America/Jamaica' => 'America/Jamaica',
  'America/Martinique' => 'America/Martinique',
  'America/Montserrat' => 'America/Montserrat',
  'America/Managua' => 'America/Managua',
  'America/Panama' => 'America/Panama',
  'America/Puerto_Rico' =>'America/Puerto_Rico' ,
  'America/St_Kitts' => 'America/St_Kitts',
  'America/St_Lucia' => 'America/St_Lucia',
  'America/Miquelon' => 'America/Miquelon',
  'America/St_Vincent' => 'America/St_Vincent',
  'America/Grand_Turk' => 'America/Grand_Turk',
  'America/Tortola' => 'America/Tortola',
  'America/St_Thomas' => 'America/St_Thomas',
  'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos_Aires',
  'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
  'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
  'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
  'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
  'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
  'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
  'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio_Gallegos',
  'America/Argentina/Ushuaia' =>  'America/Argentina/Ushuaia',
  'America/Aruba' => 'America/Aruba',
  'America/La_Paz' => 'America/La_Paz',
  'America/Noronha' => 'America/Noronha',
  'America/Belem' => 'America/Belem',
  'America/Fortaleza' => 'America/Fortaleza',
  'America/Recife' => 'America/Recife',
  'America/Araguaina' => 'America/Araguaina',
  'America/Maceio' => 'America/Maceio',
  'America/Bahia' => 'America/Bahia',
  'America/Sao_Paulo' => 'America/Sao_Paulo',
  'America/Campo_Grande' => 'America/Campo_Grande',
  'America/Cuiaba' => 'America/Cuiaba',
  'America/Porto_Velho' => 'America/Porto_Velho',
  'America/Boa_Vista' => 'America/Boa_Vista',
  'America/Manaus' => 'America/Manaus',
  'America/Eirunepe' => 'America/Eirunepe',
  'America/Rio_Branco' => 'America/Rio_Branco',
  'America/Santiago' => 'America/Santiago',
  'Pacific/Easter' => 'Pacific/Easter' ,
  'America/Bogota' => 'America/Bogota',
  'America/Curacao' => 'America/Curacao',
  'America/Guayaquil' => 'America/Guayaquil',
  'Pacific/Galapagos' => 'Pacific/Galapagos' ,
  'Atlantic/Stanley' => 'Atlantic/Stanley',
  'America/Cayenne' => 'America/Cayenne',
  'America/Guyana' => 'America/Guyana',
  'America/Asuncion' => 'America/Asuncion',
  'America/Lima' => 'America/Lima',
  'Atlantic/South_Georgia' => 'Atlantic/South_Georgia',
  'America/Paramaribo' => 'America/Paramaribo',
  'America/Port_of_Spain' => 'America/Port_of_Spain',
  'America/Montevideo' => 'America/Montevideo',
  'America/Caracas' => 'America/Caracas',
  );

  $app_list_strings['moduleList']['Sugar_Favorites'] = 'Favorites';
  $app_list_strings['eapm_list']= array(
    'Sugar'=>'Sugar',
    'WebEx'=>'WebEx',
    'GoToMeeting'=>'GoToMeeting',
    'LotusLive'=>'LotusLive',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook'=>'Facebook',
    'Twitter'=>'Twitter',
  );
  $app_list_strings['eapm_list_import']= array(
  	'Google' => 'Google Contacts',
  );
$app_list_strings['eapm_list_documents']= array(
  	'Google' => 'Google Docs',
  );
	$app_list_strings['token_status'] = array(
        1 => 'Request',
        2 => 'Access',
        3 => 'Invalid',
    );

$app_list_strings ['emailTemplates_type_list'] = array (
    '' => '' ,
    'campaign' => 'Campaign' ,
    'email' => 'Email',
    'workflow' => 'Workflow',
  );

$app_list_strings ['emailTemplates_type_list_campaigns'] = array (
    '' => '' ,
    'campaign' => 'Campaign' ,
  );

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array (
    '' => '' ,
    'campaign' => 'Campaign' ,
    'email' => 'Email',
  );
?>
