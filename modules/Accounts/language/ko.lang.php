<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 *The contents of this file are subject to the SugarCRM Professional End User License Agreement
 *("License") which can be viewed at http://www.sugarcrm.com/EULA.
 *By installing or using this file, You have unconditionally agreed to the terms and conditions of the License, and You may
 *not use this file except in compliance with the License. Under the terms of the license, You
 *shall not, among other things: 1) sublicense, resell, rent, lease, redistribute, assign or
 *otherwise transfer Your rights to the Software, and 2) use the Software for timesharing or
 *service bureau purposes such as hosting the Software for commercial gain and/or for the benefit
 *of a third party.  Use of the Software may be subject to applicable fees and any use of the
 *Software without first paying applicable fees is strictly prohibited.  You do not have the
 *right to remove SugarCRM copyrights from the source code or user interface.
 * All copies of the Covered Code must include on each user interface screen:
 * (i) the "Powered by SugarCRM" logo and
 * (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for requirements.
 *Your Warranty, Limitations of liability and Indemnity are expressly stated in the License.  Please refer
 *to the License for the specific language governing these rights and limitations under the License.
 *Portions created by SugarCRM are Copyright (C) 2004 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * $Id: en_us.lang.php 56786 2010-06-02 18:29:56Z jenny $
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    //BEGIN SUGARCRM flav=pro ONLY
    'LBL_CONTRACTS'=>'Contracts',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'계약 및 수주',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => '영업 상품',
    'LBL_QUOTES_SUBPANEL_TITLE' => '견적서',
    'LNK_ACCOUNT_REPORTS' => '거래처 보고서보기',
    //END SUGARCRM flav=pro ONLY
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '계약서 및 문서',
    // Dashlet Categories
    'LBL_CHARTS'    => '차트',
    'LBL_DEFAULT' => '화면',
    'LBL_MISC'    => '기타',
    'LBL_UTILS'    => '유틸리티',
    // END Dashlet Categories

    'ACCOUNT_REMOVE_PROJECT_CONFIRM' => '정말로 현재 거래처를 해당 프로젝트에서 제외하시겠습니까?',
    'ERR_DELETE_RECORD' => '거래처를 삭제하기 위해선 정확한 자료 고유번호를 입력하셔야합니다.',
    'LBL_ACCOUNT_INFORMATION' => '주요정보',
    'LBL_ACCOUNT_NAME' => '거래처명:',
    'LBL_ACCOUNT' => '거래:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'활동내역',
    'LBL_ADDRESS_INFORMATION' => '주소정보',
    'LBL_ANNUAL_REVENUE' => '년 수익:',
    'LBL_ANY_ADDRESS' => '다른 주소:',
    'LBL_ANY_EMAIL' => '다른 이메일:',
    'LBL_ANY_PHONE' => '다른 전화번:',
    'LBL_ASSIGNED_TO_NAME' => '담당자:',
    'LBL_ASSIGNED_TO_ID' => '배정된 담당자:',
    'LBL_BILLING_ADDRESS_CITY' => '시:',
    'LBL_BILLING_ADDRESS_COUNTRY' => '국가:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => '우편번호:',
    'LBL_BILLING_ADDRESS_STATE' => '도:',
    'LBL_BILLING_ADDRESS_STREET_2' =>'나머지 주소 2',
    'LBL_BILLING_ADDRESS_STREET_3' =>'나머지 주소 3',
    'LBL_BILLING_ADDRESS_STREET_4' =>'나머지 주소 4',
    'LBL_BILLING_ADDRESS_STREET' => '나머지 주소:',
    'LBL_BILLING_ADDRESS' => '청구지 주소:',
    'LBL_BUG_FORM_TITLE' => '거래처',
    'LBL_BUGS_SUBPANEL_TITLE' => '결함요청',
    'LBL_CALLS_SUBPANEL_TITLE' => '전화상',
    //BEGIN SUGARCRM flav!=sales ONLY
    'LBL_CAMPAIGN_ID' => '캠페인 ID',
    //END SUGARCRM flav!=sales ONLY
    'LBL_CASES_SUBPANEL_TITLE' => '고객요청사례',
    'LBL_CITY' => '시:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '연락처',
    'LBL_COUNTRY' => '국가:',
    'LBL_DATE_ENTERED' => '생성일자:',
    'LBL_DATE_MODIFIED' => '수정일자:',
    'LBL_MODIFIED_ID'=>'Modified By Id',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '거래처',
    'LBL_DESCRIPTION_INFORMATION' => '상세정보',
    'LBL_DESCRIPTION' => '상세정보:',
    'LBL_DUPLICATE' => '중복 가능성있는 거래처정보',
    'LBL_EMAIL' => '이메일 주소:',
    'LBL_EMAIL_OPT_OUT' => '이메일 수신거부:',
    'LBL_EMAIL_ADDRESSES' => '이메일 주소목록',
    'LBL_EMPLOYEES' => '직원목록:',
    'LBL_FAX' => '팩스번호:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'기록',
    'LBL_HOMEPAGE_TITLE' => '내 담당 거래처',
    'LBL_INDUSTRY' => '업종:',
    'LBL_INVALID_EMAIL'=>'올바르지않은 이메일:',
    'LBL_INVITEE' => '연락처',
    'LBL_LEADS_SUBPANEL_TITLE' => '관심고객',
    'LBL_LIST_ACCOUNT_NAME' => '거래처명',
    'LBL_LIST_CITY' => '시',
    'LBL_LIST_CONTACT_NAME' => '연락 담당',
    'LBL_LIST_EMAIL_ADDRESS' => '이메일 주소',
    'LBL_LIST_FORM_TITLE' => '거래처 목록',
    'LBL_LIST_PHONE' => '연락처',
    'LBL_LIST_STATE' => '도',
    'LBL_LIST_WEBSITE' => '웹사이트',
    'LBL_MEETINGS_SUBPANEL_TITLE' => '미팅목록',
    'LBL_MEMBER_OF' => '상위계열사:',
    'LBL_MEMBER_ORG_FORM_TITLE' => '계열사',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'계열사목록',
    'LBL_MODULE_NAME' => '거래처',
    'LBL_MODULE_TITLE' => '거래처: 처음',
    'LBL_MODULE_ID'=> '거래처 목록',
    'LBL_NAME'=>'거래처명:',
   'LBL_NEW_FORM_TITLE' => '새 거래처',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '영업기회목록',
    'LBL_OTHER_EMAIL_ADDRESS' => '다른 이메일 주소:',
    'LBL_OTHER_PHONE' => '다른 전화번호:',
    'LBL_OWNERSHIP' => '대표:',
    'LBL_PARENT_ACCOUNT_ID' => 'Parent Account ID',
    'LBL_PHONE_ALT' => '보조 연락처:',
    'LBL_PHONE_FAX' => '폰 펙스번호:',
    'LBL_PHONE_OFFICE' => '사무실 전화번호:',
    'LBL_PHONE' => '전화번호:',
    'LBL_POSTAL_CODE' => '우편번호:',
    'LBL_PRODUCTS_TITLE'=>'상품',
    //BEGIN SUGARCRM flav!=sales ONLY
    'LBL_PROJECTS_SUBPANEL_TITLE' => '프로젝트목록',
    //END SUGARCRM flav!=sales ONLY
    'LBL_PUSH_BILLING' => 'Push Billing',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copy to Contacts',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copy...',
    'LBL_PUSH_SHIPPING' => 'Push Shipping',
    'LBL_RATING' => '평가:',
    'LBL_SAVE_ACCOUNT' => '거래처 저장하기',
    'LBL_SEARCH_FORM_TITLE' => '거래처 검색',
    'LBL_SHIPPING_ADDRESS_CITY' => '시:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '국가:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => '우편번호:',
    'LBL_SHIPPING_ADDRESS_STATE' => '도:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '나머지 주소 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '나머지 주소 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '나머지 주소 4',
    'LBL_SHIPPING_ADDRESS_STREET' => '나머지 주소:',
    'LBL_SHIPPING_ADDRESS' => '배송지 주소:',
    'LBL_SIC_CODE' => '사업자 등록 번호:',
    'LBL_STATE' => '도:',
    'LBL_TASKS_SUBPANEL_TITLE' => '업무내역',
    'LBL_TEAMS_LINK'=>'Teams',
    'LBL_TICKER_SYMBOL' => '증권코드:',
    'LBL_TYPE' => '종류:',
    'LBL_USERS_ASSIGNED_LINK'=>'배정된 담당자',
    'LBL_USERS_CREATED_LINK'=>'생성한 담당자목록',
    'LBL_USERS_MODIFIED_LINK'=>'수정한 담당자목록',
    'LBL_VIEW_FORM_TITLE' => '거래처 화면',
    'LBL_WEBSITE' => '웹사이트:',
    'LBL_CREATED_ID'=>'Created By Id',
    //BEGIN SUGARCRM flav!=sales ONLY
    'LBL_CAMPAIGNS' =>'할당된 광고 캠페인',
    //END SUGARCRM flav!=sales ONLY
    'LNK_ACCOUNT_LIST' => '거래처목록 보기',
    'LNK_NEW_ACCOUNT' => '거래처 추가하기',
    'LNK_IMPORT_ACCOUNTS' => '거래처 가져오기',
    'MSG_DUPLICATE' => '현재 저장하시려는 정보가 기존의 거래처와 유사합니다. 아래의 비슷한 회사명을 가지고 있는 거래처목록을 확인하시고 중복된 자료이면 목록에서 선택해주세요.<br>만약 새로운 거래처가 확실하다면 거래처 추가하기를 선택해주세요.',
    'MSG_SHOW_DUPLICATES' => '현재 저장하시려는 정보가 기존의 거래처와 유사합니다. 아래의 비슷한 회사명을 가지고 있는 거래처목록을 확인하시고 중복된 자료이면 목록에서 선택해주세요.<br>만약 새로운 거래처가 확실하다면 거래처 추가하기를 선택해주세요.',
    'NTC_COPY_BILLING_ADDRESS' => '청구지 주소정보를 배송지 주소로 복사하기.',
    'NTC_COPY_BILLING_ADDRESS2' => '배송지 주소로 복사하기',
    'NTC_COPY_SHIPPING_ADDRESS' => '배송지 주소정보를 청구지 주소로 복사하기.',
    'NTC_COPY_SHIPPING_ADDRESS2' => '청구지 주소로 복사하기',
    'NTC_DELETE_CONFIRMATION' => '정말로 이 자료를 삭제하시겠습니까?',
    'NTC_REMOVE_ACCOUNT_CONFIRMATION' => '정말로 이 자료를 삭제하시겠습니까?',
    'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Are you sure you want to remove this record as a member organization?',
    'LBL_ASSIGNED_USER_NAME' => '배정된 담당자:',
    'LBL_PROSPECT_LIST' => '잠재고객목록',
    'LBL_ACCOUNTS_SUBPANEL_TITLE'=>'거래처목록',
    //BEGIN SUGARCRM flav!=sales ONLY
    'LBL_PROJECT_SUBPANEL_TITLE' => '프로젝트목록',
    //END SUGARCRM flav!=sales ONLY
    'LBL_COPY' => '복사' /*for 508 compliance fix*/,
    //For export labels
    'LBL_ACCOUNT_TYPE' => '거래처 종류',
    'LBL_CAMPAIGN_ID' => '캠페인 ID',
    'LBL_PARENT_ID' => 'Parent ID',
    'LBL_PHONE_ALTERNATE' => '보조 연락처',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => '배정된 담당자명',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => '연관된 연락처 이메일주소 목록',
);
?>
