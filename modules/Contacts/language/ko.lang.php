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
 * $Id: en_us.lang.php 55931 2010-04-09 18:25:11Z jmertic $
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
    //END DON'T CONVERT
    //BEGIN SUGARCRM flav=pro ONLY
    'LNK_CONTACT_REPORTS' => '연락처 보고서보기',
    //END SUGARCRM flav=pro ONLY
    'ERR_DELETE_RECORD' => '연락처를 삭제하기 위해선 정확한 자료 고유번호를 입력하셔야합니다.',
    'LBL_ACCOUNT_ID' => '회사 ID:',
    'LBL_ACCOUNT_NAME' => '회사명:',
    //BEGIN SUGARCRM flav!=sales ONLY
    'LBL_CAMPAIGN'     => '캠페인:',
    //END SUGARCRM flav!=sales ONLY
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'활동내역',
    'LBL_ADD_BUSINESSCARD' => '명함 등록하기',
    'LBL_ADDMORE_BUSINESSCARD' => '다른명함 등록하기',
    'LBL_ADDRESS_INFORMATION' => '주소정보',
    'LBL_ALT_ADDRESS_CITY' => '시:',
    'LBL_ALT_ADDRESS_COUNTRY' => '국가:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '우편번호:',
    'LBL_ALT_ADDRESS_STATE' => '도:',
    'LBL_ALT_ADDRESS_STREET_2' => '나머지 주소 2:',
    'LBL_ALT_ADDRESS_STREET_3' => '나머지 주소 3:',
    'LBL_ALT_ADDRESS_STREET' => '나머지 주소:',
    'LBL_ALTERNATE_ADDRESS' => '보조 주소:',
    'LBL_ALT_ADDRESS' => '다른 주소:',
    'LBL_ANY_ADDRESS' => '다른 주소:',
    'LBL_ANY_EMAIL' => '다른 이메일:',
    'LBL_ANY_PHONE' => '다른 전화번호:',
    'LBL_ASSIGNED_TO_NAME' => '담당자:',
    'LBL_ASSIGNED_TO_ID' => '배정된 담당자',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_BIRTHDATE' => '생년월일:',
    'LBL_BUSINESSCARD' => '명함',
    'LBL_CITY' => '시:',
    //BEGIN SUGARCRM flav!=sales ONLY
    'LBL_CAMPAIGN_ID' => '캠페인 ID',
    //END SUGARCRM flav!=sales ONLY
    'LBL_CONTACT_INFORMATION' => '주요정보',
    'LBL_CONTACT_NAME' => '연락처명:',
    'LBL_CONTACT_OPP_FORM_TITLE' => '연결된 영업기회:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => '연락:',
    //BEGIN SUGARCRM flav=pro ONLY
    'LBL_CONTRACTS' => '계약목록',
    //END SUGARCRM flav=pro ONLY
    'LBL_COUNTRY' => '국가:',
    'LBL_CREATED_ACCOUNT' => '새로운 거래처를 추가하였습니다.',
    'LBL_CREATED_CALL' => '새로운 통화기록을 추가하였습니다.',
    'LBL_CREATED_CONTACT' => '새로운 연락처를 추가하였습니다.',
    'LBL_CREATED_MEETING' => '새로운 미팅을 추가하였습니다.',
    'LBL_CREATED_OPPORTUNITY' =>'새로운 영업기회를 추가하였습니다.',
    'LBL_DATE_MODIFIED' => '수정일자:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '연락처목록',
    'LBL_DEPARTMENT' => '조직/부서:',
    'LBL_DESCRIPTION_INFORMATION' => '세부정보',
    'LBL_DESCRIPTION' => '세부정보:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE'=>'연결된 보고서',
    'LBL_DO_NOT_CALL' => '수신거부:',
    'LBL_DUPLICATE' => '중복 가능한 연락처목록',
    'LBL_EMAIL_ADDRESS' => '이메일 주소:',
    'LBL_EMAIL_OPT_OUT' => '이메일 수신거부:',
    'LBL_EMPTY_VCARD' => 'vCard파일을 선택해주세요.',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY'=> 'Used an existing opportunity',
    'LBL_FAX_PHONE' => '팩스:',
    'LBL_FIRST_NAME' => '이름:',
    'LBL_FULL_NAME' => '성명:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'보관',
    'LBL_HOME_PHONE' => '집전화번호:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'vCard 가져오기',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => '현재 vCard파일로 부터 자동으로 새로운 연락처를 추가합니다.',
    'LBL_INVALID_EMAIL'=>'올바르지 않은 이메일:',
    'LBL_INVITEE' => '직속 보고자목록',
    'LBL_LAST_NAME' => '성:',
    'LBL_LEAD_SOURCE' => '고객전환 출처:',
    'LBL_LIST_ACCEPT_STATUS' => '수락 상태',
    'LBL_LIST_ACCOUNT_NAME' => '거래처명',
    'LBL_LIST_CONTACT_NAME' => '연락처명',
    'LBL_LIST_CONTACT_ROLE' => '역할',
    'LBL_LIST_EMAIL_ADDRESS' => '이메일',
    'LBL_LIST_FIRST_NAME' => '이름',
    'LBL_LIST_FORM_TITLE' => '연락처 목록',
    'LBL_VIEW_FORM_TITLE' => 'Contact View',
    'LBL_LIST_LAST_NAME' => '성',
    'LBL_LIST_NAME' => '이름',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => '다른 이메일 주소',
    'LBL_LIST_PHONE' => '회사 전화번호',
    'LBL_LIST_TITLE' => '직책',
    'LBL_MOBILE_PHONE' => '휴대폰:',
    'LBL_MODIFIED' => '최종 수정자:',
    'LBL_MODULE_NAME' => '연락처 목록',
    'LBL_MODULE_TITLE' => 'Contacts: Home',
    'LBL_NAME' => '이름:',
    'LBL_NEW_FORM_TITLE' => '새로운 연락처',
    'LBL_NEW_PORTAL_PASSWORD' => '새로운 포털 비밀번호:',
    'LBL_NOTE_SUBJECT' =>'메모 제목',
    'LBL_OFFICE_PHONE' => '회사 전화번호:',
    'LBL_OPP_NAME' => '영업기회명:',
    'LBL_OPPORTUNITY_ROLE_ID'=>'Opportunity Role ID:',
    'LBL_OPPORTUNITY_ROLE'=>'Opportunity Role',
    'LBL_OTHER_EMAIL_ADDRESS' => '다른 이메일 주소:',
    'LBL_OTHER_PHONE' => '다른 전화번호:',
    'LBL_PHONE' => '전화번호:',
    'LBL_PORTAL_ACTIVE' => '포털 활성화상태:',
    'LBL_PORTAL_APP'=>'Portal Application:',
    'LBL_PORTAL_INFORMATION' => '포털 정보',
    'LBL_PORTAL_NAME' => '포털명:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portal Password is Set:',
    'LBL_STREET' => '상세주소',
    'LBL_POSTAL_CODE' => '우편번호:',
    'LBL_PRIMARY_ADDRESS_CITY' => '시:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '국가:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '우편번호:',
    'LBL_PRIMARY_ADDRESS_STATE' => '도:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '상세주소 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '상세주소 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '상세주소:',
    'LBL_PRIMARY_ADDRESS' => '기본주소:',
    'LBL_PRODUCTS_TITLE'=>'상품',
    'LBL_RELATED_CONTACTS_TITLE'=>'연관된 연락처목록',
    'LBL_REPORTS_TO_ID'=>'Reports to ID:',
    'LBL_REPORTS_TO' => '다음 담당자에 보고:',
    'LBL_RESOURCE_NAME' => '출처명',
    'LBL_SALUTATION' => '인사:',
    'LBL_SAVE_CONTACT' => '연락처 저장하기',
    'LBL_SEARCH_FORM_TITLE' => '연락처 검색하기',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '선택된 연락처 선택하기',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '선택된 연락처 선택하기',
    'LBL_STATE' => '도:',
    'LBL_SYNC_CONTACT' => 'MS Outlook&reg;과 동기화:',
    'LBL_PROSPECT_LIST' => '잠재 고객 목록',
    //BEGIN SUGARCRM flav=pro ONLY
    'LBL_TEAM_ID' => '부서 ID:',
    //END SUGARCRM flav=pro ONLY
    'LBL_TITLE' => '직책:',
    'LNK_CONTACT_LIST' => '연락처 목록보기',
    'LNK_IMPORT_VCARD' => 'vCard로부터 연락처 추가하기',
    'LNK_NEW_ACCOUNT' => '연락처 추가하기',
    'LNK_NEW_APPOINTMENT' => '일정 추가하기',
    'LNK_NEW_CALL' => '통화목록',
    'LNK_NEW_CASE' => '요청사례 추가하기',
    'LNK_NEW_CONTACT' => '연락처 추가하기',
    'LNK_NEW_EMAIL' => '이메일 보관하기',
    'LNK_NEW_MEETING' => '미팅 추가하기',
    'LNK_NEW_NOTE' => '메모 추가하',
    'LNK_NEW_OPPORTUNITY' => '영업기회 추가하기',
    'LNK_NEW_TASK' => '업무내역 추가하기',
    'LNK_SELECT_ACCOUNT' => "거래처 선택하기",
    'MSG_DUPLICATE' => '현재 저장하시려는 정보가 기존의 연락처와 유사합니다. 아래의 비슷한 연락처명을 가지고 있는 연락처목록을 확인하시고 중복된 자료이면 목록에서 선택해주세요.<br>만약 새로운 연락처가 확실하다면 저장하기를 선택해주세요.',
    'MSG_SHOW_DUPLICATES' => '현재 저장하시려는 정보가 기존의 연락처와 유사합니다. 아래의 비슷한 연락처명을 가지고 있는 연락처목록을 확인하시고 만약 새로운 연락처가 확실하다면 저장하기를 선택해주세요. 취소를 누르시면 저장을 하지 않고 연락처 목록으로 돌아갑니다.',
    'NTC_COPY_ALTERNATE_ADDRESS' => '보조 주소를 기본 주소로 복사하기',
    'NTC_COPY_PRIMARY_ADDRESS' => '기본 주소를 보조 주소로 복사히기',
    'NTC_DELETE_CONFIRMATION' => '정말로 현재 자료를 삭제하시겠습니까?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => '영업기회를 생성하시려면 거래처를 기입하셔야 합니다.\n 새로운 거래처를 생성하시거나 기존 자료에서 선택해 주세요.',
    'NTC_REMOVE_CONFIRMATION' => '정말로 현재 연락처를 선택된 요청사례에서 제거하시겠습니까?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '정말로 현재 자료를 자동 보고 목록에서 제외하시겠습니까?',

    'LBL_USER_PASSWORD' => '비밀번호:',

    'LBL_LEADS_SUBPANEL_TITLE' => '관심고객',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '영업기',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    //BEGIN SUGARCRM flav=pro ONLY
    'LBL_QUOTES_SUBPANEL_TITLE' => '견적',
    'LBL_QUOTES_SHIP_TO' => '견적서 (배송지주소)',
    'LBL_QUOTES_BILL_TO' => '견적서 (청구지주소)',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => '상품',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => '계약 및 수주',
    //END SUGARCRM flav=pro ONLY
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => '기본 주소로 복사',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => '보조 주소로 복사',
    //BEGIN SUGARCRM flav!=sales ONLY

    'LBL_CASES_SUBPANEL_TITLE' => '고객요청사례',
    'LBL_BUGS_SUBPANEL_TITLE' => '결함요청',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '프로젝트목록',
    'LBL_PROJECTS_RESOURCES' => 'Projects Resources',
    'LBL_TARGET_OF_CAMPAIGNS' => '캠페인 (발송대상) :',
    'LBL_CAMPAIGNS'	=>	'캠페인',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'연관된 광고 캠페인',
    //END SUGARCRM flav!=sales ONLY
    'LBL_LIST_CITY' => '시',
    'LBL_LIST_STATE' => '도',
    'LBL_HOMEPAGE_TITLE' => '내 담당 연락처',
    'LBL_OPPORTUNITIES' => '영업기회목록',

    //BEGIN SUGARCRM flav=pro ONLY
    'LBL_PORTAL_PASSWORD' => '포털 비밀번호',
    'LBL_CONFIRM_PORTAL_PASSWORD' => '포털 비밀번호 확인',
    //END SUGARCRM flav=pro ONLY
    'LBL_CHECKOUT_DATE'=>'만료일자',
    //BEGIN SUGARCRM flav=dce ONLY
    'LBL_CONTACT_DCEINST_FORM_TITLE' => 'Contact-Instance:',
    'LBL_DCEINST_NAME' => 'Instance Name:',
    'LBL_DCEINSTANCES' => 'Instances',
    'LBL_DCEINSTANCE_ROLE' => 'Instance Role',
    //END SUGARCRM flav=dce ONLY
    'LBL_CONTACTS_SUBPANEL_TITLE' => '연락처목록',
    'LBL_PROJECT_SUBPANEL_TITLE' => '프로젝트목록',
    //BEGIN SUGARCRM flav!=sales ONLY
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => '연관된 캠페인 목록',
    //END SUGARCRM flav!=sales ONLY
    'LNK_IMPORT_CONTACTS' => '연락처 가져오기',

    //For export labels
    'LBL_PHONE_HOME' => '집 전화번호',
    'LBL_PHONE_MOBILE' => '휴대폰번호',
    'LBL_PHONE_WORK' => '회사 전화번호',
    'LBL_PHONE_OTHER' => '다른 전화번호',
    'LBL_PHONE_FAX' => '팩스번호',
    'LBL_CAMPAIGN_ID' => '캠페인 ID',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => '담당자명',
    'LBL_EXPORT_ASSIGNED_USER_ID' => '담당자 ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
    'LBL_EXPORT_CREATED_BY' => 'Created By ID',
    'LBL_EXPORT_PHONE_HOME' => '집전화번호',
    'LBL_EXPORT_PHONE_MOBILE' => '휴대폰번호',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => '연관된 연락처 이메일주소 목록',
    'LBL_USER_SYNC' => '사용자 동기화'
)
?>
