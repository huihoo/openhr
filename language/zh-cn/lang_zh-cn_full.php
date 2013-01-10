<?php
/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 *
 */

	/**
	 * Error messages
	 *
	 */

	$lang_Error_PleaseCorrectTheFollowing 			="请更正以下错误"; //Please correct the following
	$lang_Error_SelectAtLeastOneRecordToDelete 		= "至少选择一条记录以便删除"; //Select at least one record to delete
	$lang_Error_DoYouWantToDelete 					= "需要删除吗?"; //Do you want to delete?
	$lang_Error_EnterDate							= "请输入日期"; //Please enter date

	$lang_Error_PleaseSelectAYear 					= "请选择年份"; //Please select a Year
	$lang_Error_PleaseSelectAnEmployee 				= "请选择员工"; //Please select an Employee

	$lang_Error_DoYouWantToContinue 				= "需要继续吗?"; //Do you want to continue?

	$lang_Error_ShouldBeNumeric 					= "应该是数字"; //Should be Numeric
	$lang_Error_FollowingErrorsWereFound 			= "发现以下错误"; //Following errors were found
	$lang_Error_AreYouSureYouWantToDelete 			= "确定删除"; //Are you sure you want to delete
	$lang_Error_AccessDenied                        = "拒绝访问"; //Access Denied

	//leave
	$lang_Error_PleaseSelectAValidFromDate 			= "请选择一个有效的开始日期"; //Please select a valid From Date
	$lang_Error_PleaseSelectAValidToDate 			= "请选择一个有效截止日期"; //Please select a valid To Date
	$lang_Error_PleaseSelectALeaveType 				= "请选择一个休假类别"; //Please select a Leave Type

	$lang_Error_LeaveDateCannotBeABlankValue 		= "离开日期不能为空！"; //Leave date cannot be a blank value!
	$lang_Error_NameOfHolidayCannotBeBlank 			= "节日名不能为空"; //Name of holiday cannot be blank

	$lang_Error_NoLeaveTypes 						= "没有休假类别"; //No Leave Types
           $lang_Error_NoYearSpecified 						= "没有指定年份"; //No Year Specified
	$lang_Error_NoRecordsFound 						= "没有找到记录!"; //No records found!

	$lang_Error_InvalidDate 						= "无效日期"; //Invalid date

	$lang_Error_NonNumericHours						= "请用数字表示时间"; //Number of hours should be numeric
	$lang_Error_EmailConfigConfirm						= "邮箱设置错误，需要继续吗? "; //Email configuration is not set or invalid. Do you want to continue ?
	$lang_Error_EmailConfigError_SendmailNotFound				= "选择目录下没有文件！"; //No file is found under the given Sendmail path
	$lang_Error_EmailConfigError_SendmailNotExecutable			= "选择目录下文件格式不匹配！"; //File under the given Sendmail path is not executable
	$lang_Error_EmailConfigError_SmtpHostNotDefined				= "SMTP服务器没有设置！"; //SMTP host is not defined
	//PIM
	$lang_Error_LastNameNumbers						= "姓中含有数字，要继续吗?"; //Last Name contains numbers. Do you want to continue?
	$lang_Error_FirstNameNumbers					= "名中含有数字，要继续吗?"; //First Name contains numbers. Do you want to continue?
	$lang_Error_MiddleNameNumbers					= "中间名含有数字，要继续吗?"; //Middle Name contains numbers. Do you want to continue?
	$lang_Error_MiddleNameEmpty						= "中间名为空，要继续吗?"; //Middle Name Empty. Do you want to continue?
	$lang_Error_LastNameEmpty						= "姓为空!"; //Last Name Empty!
	$lang_Error_FirstNameEmpty						= "名为空!"; //First Name Empty!
	$lang_Error_ChangePane							= "转到下一页前请保存!"; //Please save the changes before you move onto another pane!";

	$lang_Error_UploadFailed						= "上传失败!"; //Upload failed!
	$lang_Errro_WorkEmailIsNotValid                 = "工作邮件地址无效"; //The work email is not valid
	$lang_Errro_OtherEmailIsNotValid                = "其它邮件地址无效"; //The other email is not valid

	$lang_Error_DependantNameEmpty					= "家属姓名为空"; //Dependent name is empty
        $lang_Error_ChildNameEmpty					= "孩子姓名为空"; //Child name is empty
        $lang_Error_ChildDobInvalid                                  = "出生日期为空或包含无效的项"; //Date of Birth is either empty or contains invalid entry

	// Company Structure
	$lang_Error_Company_General_Undefined 				= "请先输入公司基本信息!"; //Please define Company General Information first!
	$lang_Error_CompStruct_UnitCount 					= "#parent下的#children节点将被删除"; //Also #children unit(s) under #parent will be deteted
	$lang_Error_ItCouldCauseTheCompanyStructureToChange = "这将导致公司结构的改变"; //It could cause the company structure to change

	$lang_Error_SubDivisionNameCannotBeEmpty 			= "分支机构名称不能为空"; //Sub-division Name cannot be empty
	$lang_Error_PleaseSelectATypeOrDefineACustomType 	= "请选择或新建一个类别"; //Please select a Type or define a custom type
	$lang_Error_CompStruct_LocEmpty 					= "请选择一个地点或新建一个地点然后选中它"; //Please select a Location or define a new Location and select
	$lang_Error_CompStruct_Dept_Id_Invalid				= "部门ID已经存在，请输入一个不同的ID"; //Department ID is already exists. Please enter different id

	$lang_Error_LocationNameEmpty 						= "地点名为空"; //Location Name empty
	$lang_Error_CountryNotSelected 						= "国家/地区未选"; //Country not selected
	$lang_Error_StateNotSelected 						= "省未选"; //State not selected
	$lang_Error_CityCannotBeEmpty 						= "城市不能为空"; //City Cannot be empty
	$lang_Error_AddressEmpty 							= "地址为空"; //Address empty
	$lang_Error_ZipEmpty 								= "邮编不能为空"; //Zip - Code Cannot be empty
	$lang_Error_CompStruct_ZipInvalid 					= "邮政编码中含有以下非数字字符：#characterList"; //Zip - Code Contains non-numeric characters Here they are #characterList

	$lang_Error_InvalidEmail 							= "无效的邮件地址"; //Invalid E-mail address

	$lang_Error_InvalidDescription						= "无效的描述"; //Invalid description

	$lang_Error_FieldShouldBeNumeric					= "此处应填写数字"; //Field should be numeric

	$lang_Error_FieldShouldBeSelected					= "此处应被选中"; //Field should be selected
	$lang_Error_SelectAtLeastOneCheckBox 				= "至少选择一项"; //Select atleast one check box

	$lang_Notice_NoRights	= "未发现具有管理权限的模块。您的管理权限可能被撤消或暂时中止。"; //No modules with administrative privileges were found. Adminstration rights of your user group may have been revoked or temporarily suspended.

	/**
	 * Menu Items
	 *
	 */

	// Home
	$lang_Menu_Home 							= "首页"; //Home
	$lang_Menu_Help								= '帮助'; //Help
	$lang_Menu_HelpContents						= '帮助内容'; //Help Contents
	$lang_Menu_Home_Support 					= "技术支持"; //Support;
	$lang_Menu_Home_Forum 						= "论坛"; //Forum
	$lang_Menu_Home_Blog 						= "博客"; //Blog
    $lang_Menu_Home_Training 					= "培训"; //Training
    $lang_Menu_Home_AddOns 						= "附件"; //Add-Ons
    $lang_Menu_Home_Customizations 				= "自定义"; //Customizations

	$lang_Menu_Ess								= "自助服务"; //ESS
	$lang_Menu_Pim 								= "员工信息"; //PIM
	// Performance Module
	$lang_Menu_Perform 							= "绩效"; //Performance
	// Admin Module
	$lang_Menu_Admin 							= "管理"; //Admin

	$lang_Menu_Admin_CompanyInfo 				= "公司信息"; //Company Info
	$lang_Menu_Admin_CompanyInfo_Gen 			= "基本信息"; //General
	$lang_Menu_Admin_CompanyInfo_CompStruct 	= "公司结构"; //Company Structure
    $lang_Menu_Admin_Company_Property           = "企业性质"; //Company Property
	$lang_Menu_Admin_CompanyInfo_Locations 		= "办公地点"; //Locations

	$lang_Menu_Admin_Job 						= "职位"; //Job
	$lang_Menu_Admin_Job_JobTitles 				= "职位名称"; //Job Titles
	$lang_Menu_Admin_Job_JobSpecs               = "工作规范"; //"Job Specifications
	$lang_Menu_Admin_Job_PayGrades 				= "薪酬等级"; //Pay Grades
	$lang_Menu_Admin_Job_EmpStatus 				= "雇佣状态"; //Employment Status
	$lang_Menu_Admin_Job_EEO 					= "职位种类"; //EEO Job Categories

	$lang_Menu_Admin_Quali 						= "任职资格"; //Qualification
	$lang_Menu_Admin_Quali_Education 			= "教育水平"; //Education
	$lang_Menu_Admin_Quali_Licenses 			= "相关证书"; //Licenses

	$lang_Menu_Admin_Skills 					= "技能"; //Skills
	$lang_Menu_Admin_Skills_Skills 				= "技能"; //Skills
	$lang_Menu_Admin_Skills_Languages 			= "语言能力"; //Languages

	$lang_Menu_Admin_Memberships 					= "会员组织"; //Memberships
	$lang_Menu_Admin_Memberships_Memberships 		= "会员组织"; //Memberships
	$lang_Menu_Admin_Memberships_MembershipTypes 	= "组织类别"; //Membership Types

	$lang_Menu_Admin_NationalityNRace 				= "国籍&民族"; //Nationality & Race
	$lang_Menu_Admin_NationalityNRace_Nationality 	= "国籍"; //Nationality
	$lang_Menu_Admin_NationalityNRace_EthnicRaces 	= "民族"; //Ethnic Races

	$lang_Menu_Admin_Users 							= "系统用户"; //Users
	$lang_Menu_Admin_Users_UserGroups 				= "管理员组"; //Admin User Groups
	$lang_Menu_Admin_Users_HRAdmin 					= "HR管理员"; //HR Admin Users
	$lang_Menu_Admin_Users_ESS 						= "自助服务用户"; //ESS Users

	$lang_Menu_Admin_EmailNotifications = "邮件提醒"; //Email Notifications
	$lang_Menu_Admin_EmailConfiguration = "设置"; //Configuration
	$lang_Menu_Admin_EmailSubscribe = "订阅"; //Subscribe
	$lang_Menu_Admin_ProjectInfo = "项目信息"; //Project Info
	$lang_Menu_Admin_Customers = "客户管理"; //Customers
	$lang_Menu_Admin_Projects = "项目管理"; //Projects
	$lang_Menu_Admin_DataImportExport = "数据导入导出"; //Data Import/Export
	$lang_Menu_Admin_DataExport = "导出"; //Export
	$lang_Menu_Admin_DataExportDefine = "设置导出"; //Define Custom Export
	$lang_Menu_Admin_DataImport = "导入"; //Import
	$lang_Menu_Admin_DataImportDefine = "设置导入"; //Define Custom Import
	$lang_Menu_Admin_CustomFields = "个性化设置"; //Custom Fields

	// LDAP Module
	$lang_LDAP_Configuration 	= "#ldapType设置"; //#ldapType Configuration
	$lang_Menu_LDAP_Configuration = "LDAP设置"; //LDAP Configuration
	$lang_LDAP_Server			= "LDAP服务器"; //LDAP Server"
	$lang_LDAP_Port				= "LDAP端口"; //LDAP Port
	$lang_LDAP_Domain_Name		= "LDAP域名"; //LDAP Domain Name
	$lang_LDAP_Suffix			= "LDAP用户后缀"; //LDAP User Suffix
	$lang_LDAP_Type				= "LDAP类型"; //LDAP Type
	$lang_LDAP_Enable			= "启用LDAP认证"; //Enable LDAP Authentication
	$lang_LDAP_Error_Server_Empty	= "请输入LDAP服务器名"; //Please enter LDAP server name
	$lang_LDAP_Error_Domain_Empty	= "请输入LDAP域名"; //Please enter LDAP domain name
	$lang_LDAP__Error_Extension_Disabled = "您尚未启用的LDAP扩展在PHP. 请通过OrangeHRM发出的LDAP指南与插件的更多信息."; //You haven't enabled the LDAP extension in PHP. Please go through the OrangeHRM LDAP Guide sent with the plugin for more information.
	$lang_LDAP_Invalid_Port			= "无效的LDAP端口"; //Invalid LDAP Port

	// Leave Module
	$lang_Menu_Leave 									= "休假"; //Leave
	$lang_Menu_Leave_PersonalLeaveSummary 				= "个人休假总览"; //Personal Leave Summary
	$lang_Menu_Leave_EmployeeLeaveSummary 				= "员工休假总览"; //Employee Leave Summary
        $lang_Menu_Leave_EmployeeLeaveSummaryPDF 				= "员工休假列表"; //Summary of Employee Leave list
        $lang_Menu_Leave_EmployeeLeaveDetailedPDF 				= "员工休假明细"; //Detailed  Employee Leave list
	$lang_Menu_Leave_LeaveSummary 						= "休假总览"; //Leave Summary
	$lang_Menu_Leave_LeavesList 						= "休假列表"; //Leaves List
	$lang_Menu_Leave_ApproveLeave 						= "同意"; //Approve Leave
	$lang_Menu_Leave_DefineLeavePeriod					= "休假周期"; //Leave Period
	$lang_Menu_Leave_LeaveTypes 						= "休假类别"; //Leave Types
	$lang_Menu_Leave_Apply 								= "申请"; //Apply
	$lang_Menu_Leave_Assign								= "添加休假"; //Assign Leave
	$lang_Menu_Leave_LeaveList 							= "休假列表"; //Leave List
	$lang_Menu_Leave_MyLeave 							= "我的休假"; //My Leave
	$lang_Menu_Leave_DefineDaysOff 						= "定义公休日"; //Define Days Off
	$lang_Menu_Leave_DefineDaysOff_Weekends 			= "公休日"; //Days Off
	$lang_Menu_Leave_DefineDaysOff_SpecificHolidays 	= "特定节日"; //Specific Holidays
    $lang_Menu_Leave_WorkWeek               			= "工作周"; //Work Week
    $lang_Menu_Leave_Holidays 	                        = "假日"; //Holidays

 	$lang_Leave_Title_Apply_Leave = "申请休假"; //Apply Leave
 	$lang_Leave_Title_Assign_Leave = "添加休假"; //Assign Leave
	$lang_Leave_APPLY_SUCCESS = "申请成功"; //Apply succeeded
	$lang_Leave_APPLY_FAILURE = "申请失败"; //Apply failed
	$lang_Leave_APPROVE_SUCCESS = "添加休假成功"; //Leave Assigned
	$lang_Leave_APPROVE_FAILURE = "添加休假失败"; //Leave Assign failed
	$lang_Leave_CANCEL_SUCCESS = "取消完成"; //Successfully cancelled
	$lang_Leave_CANCEL_FAILURE = "取消失败"; //Cancellation failed
	$lang_Leave_CHANGE_STATUS_SUCCESS = "变更休假状态完成"; //Successfully changed the leave(s)";
	$lang_Leave_BALANCE_ZERO = "您的假期日已使用完"; //Your leave balance is zero

	// Report
	$lang_Menu_Reports = "报表"; //Reports
	$lang_Menu_Reports_ViewReports = "查看报表"; //View Reports
	$lang_Menu_Reports_DefineReports = "定义报表"; //Define Reports

	// Time module
	$lang_Menu_Time = "工作计划"; //Time
	$lang_Menu_Time_Timesheets = "计划表"; //Timesheets
	$lang_Menu_Time_PersonalTimesheet = "个人计划"; //My timesheet
	$lang_Menu_Time_EmployeeTimesheets = "员工工作计划"; //Employee timesheets

    // Recruitment module
	$lang_Menu_Recruit = "招聘"; //Recruitment
	$lang_Menu_Recruit_JobVacancies = "职位空缺"; //Job Vacancies
	$lang_Menu_Recruit_JobApplicants = "申请人"; //Applicants
	
	// Performance Module
	$lang_Menu_Define_Kpi = "KPI列表"; //KPI List

	/**
	 * Common
	 */
	$lang_Common_ConfirmDelete				= "确定要删除?"; //Do you want to delete ?
	$lang_Common_FieldEmpty				= "这是必填字段"; //Field Empty
	$lang_Common_SelectDelete			= "至少选择一条的记录以便删除"; //Select at least one record to delete
	$lang_Common_SelectField			= "请选择要搜索的字段!"; //Select the field to search!
	$lang_Commn_RequiredFieldMark 			= "标注有星号#star的是必填字段"; //Fields marked with an asterisk #star are required
	$lang_Commn_code 						= "编号"; //Code
	$lang_Commn_description 				= "描述"; //Description
	$lang_Commn_title 						= "标题"; //Title
	$lang_Commn_name 						= "名称"; //Name
	$lang_Commn_PleaseWait					= "请等候..."; //Please wait
	$lang_Common_Select 				= "请选择"; //Select
	$lang_Commn_Email						= "E-mail";
	$lang_Common_Loading				= "上传中"; //Loading
	$lang_Common_LoadingPage                        = "上传页"; //Loading Page
	$lang_Common_NotApplicable                      = "N/A";
	$lang_Common_Male                      		= "男"; //Male
	$lang_Common_Female                    		= "女"; //Female
	$lang_Common_TypeHereForHints 		= "开始输入的提示..."; //Start Typing for Hints...

	$lang_Common_Edit = "编辑"; //Edit
	$lang_Common_New = "新建"; //New
	$lang_Common_Save = "保存"; //Save
	$lang_Common_Back = "返回"; //Back
    $lang_Common_Add = "添加"; //Add
    $lang_Common_Delete = "删除"; //Delete
    $lang_Common_Deleted = "已删除"; //Deleted
    $lang_Common_Replace = "还原"; //Replace
    $lang_Common_Search = "查找"; //Search
    $lang_Common_Clear = "清除"; //Clear
    $lang_Common_Reset = "重置"; //Reset
    $lang_Common_Assign = "指派"; //Assign";
    $lang_Common_Apply = "应用"; //Apply";
    $lang_Common_Cancel = "取消"; //Cancel";
    $lang_Common_View = "查看"; //View";
    $lang_Common_Submit = "提交"; //Submit";
    $lang_Common_Reject = "放弃"; //Reject";
    $lang_Common_Details = "详细"; //Details";
    $lang_Common_Approve = "确认"; //Approve";
    $lang_Common_Update = "更新"; //Update";
    $lang_Common_InsertTime = "插入时间"; //Insert Time";
	$lang_Common_SortAscending = "按升序排列"; //Sort in ascending order";
	$lang_Common_SortDescending = "按降序排列"; //Sort in descending order";


	$lang_Common_Time = "时间"; //Time
	$lang_Common_Date = "日期"; //Date";
	$lang_Common_Note = "标注"; //Note
	
	$lang_Common_EmployeeName = "员工姓名"; //Employee Name

	$lang_Common_AccessDenied = "拒绝访问"; //Access Denied

	$lang_Common_TEST_EMAIL_SUCCESS = "测试邮件发送成功"; //Test email sent successfully
	$lang_Common_TEST_EMAIL_FAILIURE = "测试邮件发送失败。这是配置不正确。"; //Test email failed. This can be due to incorrect configuration details

    $lang_Common_Configure = "配置"; //Configure

	//days
	$lang_Common_Monday 					= "星期一"; //Monday
	$lang_Common_Tuesday 					= "星期二"; //Tuesday
	$lang_Common_Wednesday 					= "星期三"; //Wednesday
	$lang_Common_Thursday 					= "星期四"; //Thursday
	$lang_Common_Friday 					= "星期五"; //Friday
	$lang_Common_Saturday 					= "星期六"; //Saturday
	$lang_Common_Sunday 					= "星期日"; //Sunday

	$lang_Common_Sort_ASC = "升序"; //Ascending
	$lang_Common_Sort_DESC = "降序"; //Descending
	$lang_Common_EncounteredTheFollowingProblems = "遇到以下问题"; //Encountered the following problems

	$lang_Common_ADD_SUCCESS 				= "添加成功"; //Successfully Added
	$lang_Common_UPDATE_SUCCESS 			= "更新成功"; //Successfully Updated
	$lang_Common_DELETE_SUCCESS 			= "删除成功"; //Successfully Deleted
	$lang_Common_ADD_FAILURE 				= "添加失败"; //Failed to Add
    $lang_Common_DUP_USERS_FAILURE          = "无法添加重复的用户"; //Cannot Add Duplicate User
	$lang_Common_UPDATE_FAILURE 			= "更新失败"; //Failed to Update
	$lang_Common_DELETE_FAILURE 			= "删除失败"; //Failed to Delete
	$lang_Common_UNKNOWN_FAILURE            = "操作失败"; //Operation Failed
	$lang_Common_DUPLICATE_NAME_FAILURE     = "名称已经被使用"; //Name is already in use
	$lang_Common_COMPULSARY_FIELDS_NOT_ASSIGNED_FAILURE = "Compulsary未分配领域"; //Compulsary fields not assigned
	$lang_Common_IMPORT_FAILURE = "导入失败"; //Import failed
    $lang_Common_IMPORT_TEMPDIR_NOT_WRITABLE_FAILURE = "导入失败，不能写入临时目录"; //Import failed. No write permission to temporary directory
    $lang_Common_IMPORT_FILE_PERMISSION_ERROR = "导入失败，检查文件权限"; //Import failed. Check file permissions
    $lang_Common_IMPORT_FILE_EMPTY_ERROR = "导入失败，文件为空"; //Import failed. File was empty";

    // Common navigation
    $lang_Common_First						= "第一个"; //First
    $lang_Common_Last 						= "末一个"; //Last
    $lang_Common_Previous 					= "上一个"; //Previous
	$lang_Common_Next 						= "下一个"; //Next

	$lang_Leave_Common_Weekend 				= "周末"; //Weekend
	$lang_Leave_Common_Holiday				= "假日"; //Holiday

	// admin module
	$lang_Admin_Common_Institute 			= "培训机构"; //Institute
	$lang_Admin_Common_Course 				= "课程/专业"; //Course
	$lang_Admin_education_InstituteCannotBeBlank = "培训机构不能为空！"; //Institute Cannot be a Blank Value!
	$lang_Admin_CourseCannotBeBlank         = "课程/专业不能为空！"; //Course Cannot be a Blank Value!
	$lang_Admin_License_DescriptionCannotBeBlank = "证书描述不能为空！"; //License description cannot be blank!

	// leave module
	$lang_Leave_Title = "OrangeHRM - 休假模块"; //OrangeHRM - Leave Module
	$lang_Leave_Common_Date 				= "日期"; //Date

	$lang_Leave_Common_FromDate 			= "从"; //From Date
	$lang_Leave_Common_ToDate 				= "到"; //To Date

	$lang_Leave_Common_LeaveQuotaNotAllocated = "没有可用的休假，请联系HR管理员。"; //Leave Quota not allocated. Please consult HR Admin

	$lang_Leave_Common_LeaveType 			= "休假类别"; //Leave Type
	$lang_Leave_Common_Status 				= "状态"; //Status
	$lang_Leave_Common_Length 				= "全天/半天"; //Full Day/Half Day
	$lang_Leave_Common_Range 				= "起止时间"; //Range
	$lang_Leave_Common_Comments 			= "注释"; //Comments
	$lang_Leave_Common_Comment 				= "注释"; //Comment
	$lang_Leave_Common_Approved 			= "已同意"; //Approved
	$lang_Leave_Common_Cancelled 			= "已取消"; //"Cancelled";
	$lang_Leave_Common_Cancel 				= "取消"; //"Cancel";
	$lang_Leave_Common_PendingApproval 		= "未决"; //Pending Approval
	$lang_Leave_Common_Rejected 			= "被拒绝"; //Rejected
	$lang_Leave_Common_Taken 				= "选用"; //Taken
	$lang_Leave_Common_InvalidStatus 		= "无效状态"; //Invalid Status
	$lang_Leave_Common_StatusDiffer 		= "部分批准/状态不一致"; //Partly Approved / Status Differ
	$lang_Leave_Common_FullDay 				= "全天"; //Full Day
	$lang_Leave_Common_HalfDayMorning 		= "半天：上午"; //Half Day / Morning
	$lang_Leave_Common_HalfDayAfternoon 	= "半天：下午"; //Half Day / Afternoon
	$lang_Leave_Common_HalfDay 				= "半天"; //Half Day
	$lang_Leave_Common_LeaveTaken 			= "已用的休假"; //Leave Taken
	$lang_Leave_Common_LeaveRemaining 		= "剩余的休假"; //Leave Remaining
	$lang_Leave_Common_LeaveScheduled 		= "预定的休假"; //Leave Scheduled
	$lang_Leave_Common_LeaveTypeName 		= "休假类别名称"; //Leave Type Name
	$lang_Leave_Common_LeaveTypeId 			= "休假类别编号"; //Leave Type Id
	$lang_Leave_Common_Select 				= "选择"; //Select
	$lang_Leave_Common_oldLeaveTypeName 	= "休假类别名称已经存在"; //Existing Leave Type Name
	$lang_Leave_Common_newLeaveTypeName 	= "新建休假类别名称"; //New Leave Type Name
	$lang_Leave_Common_EmployeeName 		= "员工姓名"; //Employee Name
	$lang_Leave_Common_LeaveEntitled 		= "有效的休假"; //Leave Entitled
	$lang_Leave_Common_Year 				= "年份"; //Year
	$lang_Leave_Common_ListOfTakenLeave 	= "已用休假列表"; //List of Taken Leave
	$lang_Leave_Common_Remove 				= "移除"; //Remove
	$lang_Leave_Common_AllEmployees			= "所有员工"; //All Employees
	$lang_Leave_Common_All					= "全部"; //All
	$lang_Leave_Common_InvalidDateRange 	= "无效的日期范围"; //Invalid Date Range

	$lang_Leave_Common_NameOfHoliday 		= "节日名"; //Name of Holiday
	$lang_Leave_Common_Recurring 			= "每年重复"; //Repeats annually

 	$lang_Leave_Leave_list_Title1 			= "同意休假"; //Approve Leave
 	$lang_Leave_all_emplyee_leaves			= "休假列表"; //Leave List
 	$lang_Leave_all_emplyee_taken_leaves	= "选用的休假"; //Taken Leaves
	$lang_Leave_Leave_Requestlist_Title1 	= "批准#employeeName的休假申请"; //Approve Leave Request for #employeeName
	$lang_Leave_Leave_Requestlist_Title2 	= "变更#employeeName的休假申请"; //Change Leave Request for #employeeName
	$lang_Leave_Leave_list_Title2 			= "#dispYear年#employeeName已用休假"; //Leaves Taken by #employeeName in #dispYear
	$lang_Leave_Leave_list_Title3 			= "休假列表"; //Leave List
	$lang_Leave_Leave_list_Title4 			= "安排的休假"; //Scheduled Leaves
	$lang_Leave_Leave_list_TitleAllSubordinates	= "休假列表（全体下属）"; //Leave List (All Subordinates)";
	$lang_Leave_Leave_list_TitleAllEmployees= "休假列表（全体员工）"; //Leave List (All Employees)
	$lang_Leave_Leave_list_TitleMyLeaveList = "我的休假列表"; //My Leave List
	$lang_Leave_Leave_list_Title5 			= "选择的休假"; //Taken Leaves
	$lang_Leave_Leave_list_ShowLeavesWithStatus = "显示休假状态"; //Show leave with status
	$lang_Leave_Leave_list_SelectAtLeastOneStatus = "至少选择一种状态"; //Select at least one leave status
	$lang_Leave_Leave_list_From             = "从"; //From
	$lang_Leave_Leave_list_To               = "到"; //To
    $lang_Leave_Leave_list_Period           = "休假周期"; //Period
	$lang_Leave_Select_Employee_Title 		= "选择员工"; //Select Employee
	$lang_Leave_Leave_Summary_Title 		= "休假一览"; //Leave Summary
	$lang_Leave_Leave_Summary_EMP_Title 	= "#dispYear年#employeeName休假总览"; //Leave Summary for #employeeName for #dispYear
	$lang_Leave_Select_Employee_Title 		= "选择员工或休假类别"; //Select employee or leave type
	$lang_Leave_Leave_Summary_EMP_Title 	= "#dispYear年休假总览"; //Leave Summary for #dispYear
	$lang_Leave_Leave_Summary_SUP_Title 	= "#dispYear年#employeeName休假总览"; //Leave Summary for #employeeName for #dispYear
	$lang_Leave_Define_leave_Type_Title 	= "添加休假类别"; //Define Leave Type
	$lang_Leave_Leave_Type_Summary_Title 	= "休假类别"; //Leave Types
	$lang_Leave_Leave_Holiday_Specific_Title = "定义节假日：特定节日"; //Define Days Off : Specific Holidays
	$lang_Leave_Leave_Holiday_Weeked_Title 	= "定义节假日：周末"; //Define Days Off : Weekend
	$lang_Leave_Summary_Deleted_Types_Shown = "显示已删除的休假类别"; //Denotes deleted leave types.
    $lang_Leave_Summary_Deleted_Types_MoreInfo = "这里是在删除前曾被使用过的休假类别。被删除的休假类别将保留在系统中但不会被继续使用。"; //Deleted leave types are shown here if employees have used these leave types before they were deleted. Deleted leave types are retained in the system but cannot be used for new leave requests.
    $lang_Leave_LeaveCommentTooLong			= "注释太长了，允许%s字符"; //Comment is too long. Maximun allowed size is %s characters.
    $lang_Leave_Holiday_Edit_Warning = "所有申请是未来休假日期- #date,将会被重置到等待批准。确定吗?"; //All the applied future leave for date - #date , will be reset to Pending Approval. Are you sure?
    $lang_Leave_Weekend_Disabled_Warning = " #star所有周末申请的假期应归零。"; // #star The total number of applied leave should be zero to change the weekends.

	$lang_Leave_Holiday = "节假日"; //Holiday
	$lang_Leave_NoOfDays = "天数"; //No of Days
	$lang_Leave_NoOfHours = "小时数"; //No of Hours
	$lang_Leave_Period = "休假时间"; //Leave Period
	$lang_Leave_Closed = "已关闭"; //Closed

	$lang_Leave_Define_IsDeletedName  	= "已经存在同名的休假类别，但该休假类别以标示为删除。"; //Deleted Leave Type exists with the same name.
	$lang_Leave_Define_UndeleteLeaveType    = "如要重新启用标示为删除的休假类别而非新建，请点击："; //To re-use deleted leave type instead of creating a new leave type, click:
	$lang_Leave_NAME_IN_USE_ERROR 		= "此休假类别名已被使用，请选择其它的名字。"; //Leave Type name is in use. Choose another name.
	$lang_Leave_ADD_FAILURE			= "添加失败"; //Failed to Add
	$lang_Leave_ADD_SUCCESS 		= "添加成功"; //Successfully Added
	$lang_Leave_LEAVE_TYPE_NOT_FOUND_ERROR 	= "休假类别未找到"; //Leave type not found
	$lang_Leave_UNDELETE_SUCCESS		= "休假类别成功删除"; //Leave type successfully undeleted.
	$lang_Leave_DUPLICATE_LEAVE_TYPE_ERROR  = "存在同名的休假类别。休假类别名应是唯一的。"; //Duplicate leave type names specified. Leave type names should be unique.
	$lang_Leave_LEAVE_TYPE_EDIT_ERROR       = "保存变更时发生错误"; //Error saving changes
	$lang_Leave_LEAVE_TYPE_EDIT_SUCCESS     = "保存变更成功"; //Changes saved successfully
	$lang_Leave_NO_CHANGES_TO_SAVE_WARNING  = "没有改变无需保存"; //No changes to save
	$lang_Leave_Undelete			= "还原"; //Undelete
	$lang_Leave_HOLIDAY_IN_USE_ERROR = "日期正在使用，请选择另一日期"; //Date is in use. Choose another date

	$lang_Leave_Summary_Error_CorrectLeaveSummary	= "休假列表中出现错误!\\n请纠正高亮显示的数值."; //Error(s) in the Leave Summary!\\nPlease correct the highlighted leave quota values.
	$lang_Leave_Summary_Error_NonNumericValue		= "非数字"; //Non-numeric
	$lang_Leave_Summary_Error_InvalidValue			= "无效值"; //Invalid value

	$lang_bankInformation_code 				= "编号"; //Code
	$lang_bankInformation_description 		= "描述"; //Description

	$lang_compstruct_add 			= "添加"; //Add
	$lang_compstruct_delete 		= "删除"; //Delete
	$lang_compstruct_clear 			= "清空"; //Clear
	$lang_compstruct_hide 			= "隐藏"; //Hide
	$lang_compstruct_save 			= "保存"; //Save

 	$lang_comphire_heading 							= "公司结构：公司信息"; //Company Hierarchy: Company Information
	$lang_comphire_relationalhierarchy 				= "结构关系"; //Relational Hierarchy
	$lang_comphire_employee 						= "员工"; //Employee
	$lang_comphire_definitionlevel 					= "级别"; //Definition Level
	$lang_comphire_telephone 						= "电话"; //Telephone
	$lang_comphire_fax 								= "传真"; //Fax
	$lang_comphire_email							= "Email";
	$lang_comphire_url 								= "链接地址"; //URL
	$lang_comphire_logo 							= "头像"; //Logo
	$lang_comphire_selecthie 						= "选择关系"; //Select Hierarchy
	$lang_comphire_selectdef 						= "选择级别"; //Select Def. Level
	$lang_compstruct_heading 						= "公司信息：公司结构"; //Company Info : Company Structure
	$lang_compstruct_Dept_Id						= "部门编号:"; //Department ID:
	$lang_compstruct_frmSub_divisionHeadingAdd 		= "添加组织结构至"; //Add a sub-division to
	$lang_compstruct_frmSub_divisionHeadingEdit 	= "编辑"; //Edit
	$lang_compstruct_Name 							= "名称"; //Name
	$lang_compstruct_Type 							= "类别"; //Type
	$lang_compstruct_Division 						= "分支"; //Division
	$lang_compstruct_Description 					= "描述"; //Description
	$lang_compstruct_Department 					= "部门"; //Department
	$lang_compstruct_Team 							= "组"; //Team
	$lang_compstruct_Other 							= "其它"; //Other
	$lang_compstruct_Location 						= "地点"; //Location
	$lang_compstruct_frmNewLocation 				= "新建一个新地点"; //Define a new location
	$lang_compstruct_Address 						= "地址"; //Address
	$lang_compstruct_country						= "国家/地区"; //Country
	$lang_compstruct_state 							= "州/省"; //State / Province
	$lang_compstruct_city 							= "城市"; //City
	$lang_compstruct_ZIP_Code 						= "邮编"; //ZIP Code
	$lang_compstruct_Phone 							= "电话"; //Phone
	$lang_compstruct_no_root 						= "没有找到公司的基本信息，请先定义公司的基本信息。"; //Root not found! Please define the root.

 	$lang_corptit_heading 							= "公司名称：职位信息"; //Corporate Titles : Job Information
	$lang_corptit_topinhierachy 					= "组织结构的顶层"; //Top In Hierachy
	$lang_corptit_multipleheads 					= "多种类员工"; //Multiple Heads
	$lang_corptit_headcount 						= "员工总数"; //Head Count
	$lang_corptit_nextlevelupgrade 					= "下一级别提升"; //Next Level Upgrade
	$lang_corptit_selectcor 						= "选择公司名称"; //Select Corp. Title
	$lang_corptit_salarygrade 						= "薪酬等级"; //Salary Grade
	$lang_corptit_selectsal 						= "选择薪酬等级"; //Select Salary Grade

 	$lang_costcenters_heading 						= "成本中心：公司信息"; //Cost Center : Company Information

 	$lang_countryinformation_heading 				= "国家/地区信息：地理信息"; //Country Information : Geo Information

 	$lang_currencytypes_heading 					= "货币种类：职位信息"; //Currency Type : Job Information


 	$lang_districtinformation_heading 				= "城市信息：地理信息"; //City Information : Geo Information
	$lang_districtinformation_selectcounlist 		= "选择国家/地区"; //Select Country
	$lang_districtinformation_selstatelist 			= "选择州/省份"; //Select State

 	$lang_eeojobcat_heading 						= "职位：职位种类"; //Job : EEO Job Category
	$lang_eeojobcat_description 					= "名称"; //Title
	$lang_eeojobcat_TitleContainsNumbers            = "名称包含数字。要继续吗？"; //Title contains numbers. Do you want to continue?
	$lang_eeojobcat_TitleMustBeSpecified            = "必须输入名称。"; //Title must be specified.

 	$lang_electorateinformation_heading 			= "选民信息：地理信息"; //Electorate Information : Geo Information
	$lang_emprepinfo_heading						= "添加雇员报表"; //Define Employee Reports

 	$lang_emptypes_heading 					= "员工类别：关系信息"; //Employee Types : Nexus Information
	$lang_emptypes_datelimited 				= "时间限制"; //Date Limited
	$lang_emptypes_prefix 					= "前缀"; //Prefix

 	$lang_empview_heading 					= "职位：雇佣状态"; //Job : Employment Status
	$lang_empview_EmpID 					= "员工编号"; //Emp. ID
	$lang_empview_EmpFirstName 				= "名"; //Emp. First Name
	$lang_empview_EmpLastName 				= "姓"; //Emp. Last Name
	$lang_empview_EmpMiddleName 			= "中间名"; //Emp. Middle Name
	$lang_empview_search					= "搜索"; //Search
	$lang_empview_searchby 					= "搜索："; //Search By:
	$lang_empview_description 				= "查找："; //Search For:
	$lang_empview_norecorddisplay 			= "无记录显示"; //No Records to Display
	$lang_empstatus_PleaseEnterEmploymentStatus = "请输入雇佣状态的描述"; //Please enter Employment Status Description
	$lang_empview_SelectField               = "选择要查询的字段！"; //Select the field to search!

	$lang_empview_last 						= "最后一个"; //Last
	$lang_empview_next 						= "下一个"; //Next
	$lang_empview_previous 					= "上一个"; //Previous
	$lang_empview_first						= "第一个"; //First

	$lang_empview_employeeid 				= "员工编号"; //Employee Id
	$lang_empview_employeename 				= "员工姓名"; //Employee Name
	$lang_empview_ADD_SUCCESS 				= "添加成功"; //Successfully Added
	$lang_empview_UPDATE_SUCCESS 			= "更新成功"; //Successfully Updated
	$lang_empview_DELETE_SUCCESS 			= "删除成功"; //Successfully Deleted
	$lang_empview_ADD_FAILURE 				= "添加失败"; //Failed to Add
	$lang_empview_DUPLICATE_EMPCODE_FAILURE	= "添加失败，输入的员工代码重复"; //Failed to Add. Duplicate Employee Code Entered.
	$lang_empview_SELF_SUPERVISOR_FAILURE 	= "您不能添加你的上司"; //You can not add yourself as a supervisor to you
	$lang_empview_UPDATE_FAILURE 			= "更新失败"; //Failed to Update
	$lang_empview_DELETE_FAILURE 			= "删除失败"; //Failed to Delete
        $lang_empview_DELETE_PROHIBITED_FAILURE         = "你不能删除自己所在的组"; //You can't delete the group you belong to
	$lang_empview_Language 					= "语言"; //Language
	$lang_empview_WorkExperience 			= "工作经验"; //Work Experience
	$lang_empview_Payment 					= "薪酬"; //Payment
	$lang_empview_Skills 					= "技能"; //Skills
	$lang_empview_EmployeeInformation 		= "员工信息"; //Employee Information
	$lang_empview_Memberships 				= "成员关系"; //Memberships
	$lang_empview_Report 					= "汇报"; //Report
	$lang_empview_ReportTo					= "汇报对象"; //Report To
	$lang_empview_SubDivision				= "分支"; //Sub-Division
	$lang_empview_JobTitle					= "职位"; //Job Title
	$lang_empview_Supervisor 				= "主管人"; //Supervisor
	$lang_empview_EmploymentStatus			= "雇佣状态"; //Employment status
	$lang_emppop_title                      = "搜索员工"; //Search Employees

 	$lang_ethnicrace_heading 				= "国籍&民族：民族"; //Nationality & Race :Ethnic Races
 	$lang_ethnicrace_NameShouldBeSpecified  = "请输入民族的名称"; //Ethnic Race Name should be specified

 	$lang_extracurractcat_heading 			= "业余活动种类：任职资格信息"; //Extra Curricular Activities Category : Qualifications Information

 	$lang_extracurractinfo_heading 			= "业余活动信息：任职资格信息"; //Extra Curricular Activity Information : Qualification Information
	$lang_extracurractinfo_extracuaccat 	= "业余活动种类"; //Extra Curricular Act Category
	$lang_extracurractinfo_selectsecucat 	= "选择业余活动种类"; //Select Ex. Curr. Cat

 	$lang_geninfo_heading 					= "公司信息：基本信息"; //Company Info : General
	$lang_geninfo_compname 					= "公司名称"; //Company Name
	$lang_geninfo_numEmployees				= "员工数"; //Number of Employees
	$lang_geninfo_taxID 					= "税号"; //Tax ID
	$lang_geninfo_naics 					= "NAICS代码"; //NAICS
	$lang_geninfo_err_CompanyName 			= "公司名称不能为空"; //Company name cannot be blank
	$lang_geninfo_err_Phone 				= "不是一个有效的电话号码"; //Not a valid phone number
    $lang_geninfo_err_Fax                   = "不是一个有效的电话号码"; //Not a valid fax number

	$lang_geninfo_err_CommentLengthWarning	= "输入注释的长度超过规定长度，超出部分将会丢失。"; //Length of comments exceeds the limit. Text at the end of the comment will be lost.

 	$lang_hierarchydef_heading 				= "组织结构信息：公司信息"; //Hierarchy Information : Company Information

	$lang_hremp_EmpFirstName 				= "名"; //First Name
	$lang_hremp_EmpLastName 				= "姓"; //Last Name
	$lang_hremp_EmpMiddleName 				= "Middle Name";
	$lang_hremp_nickname 					= "中间名"; //Middle Name
	$lang_hremp_photo 						= "头像"; //Photo 
	$lang_hremp_ssnno 						= "身份证"; //SSN No :
	$lang_hremp_nationality 				= "国籍"; //Nationality
	$lang_hremp_sinno 						= "社保帐号"; //SIN No :
	$lang_hremp_dateofbirth 				= "出生日期"; //Date of Birth
	$lang_hremp_otherid 					= "其他证件"; //Other ID
	$lang_hremp_maritalstatus 				= "婚姻状况"; //Marital Status
	$lang_hremp_selmarital					= "--选择--"; //--Select--
	$lang_hremp_selectnatio 				= "选择国籍"; //Select Nationality
	$lang_hremp_selethnicrace 				= "选择民族"; //Select Ethnic Race
	$lang_hremp_smoker 						= "抽烟"; //Smoker
	$lang_hremp_gender 						= "性别"; //Gender
	$lang_hremp_dlicenno 					= "驾照号"; //Driver's License Number
	$lang_hremp_licexpdate 					= "驾照有效期"; //License Expiry Date
	$lang_hremp_militaryservice 			= "兵役证"; //Military Service
	$lang_hremp_ethnicrace 					= "民族"; //Ethnic Race
	$lang_hremp_jobtitle 					= "职位名称"; //Job Title
	$lang_hremp_selempstat 					= "选择员工状态"; //Select Empl. Status
    $lang_hremp_jobspec                     = "工作规范"; //Job Specification
    $lang_hremp_jobspecduties               = "职位职责"; //Job Duties
	$lang_hremp_eeocategory 				= "行业种类"; //EEO Category
	$lang_hremp_seleeocat 					= "选择职位种类"; //Select EEO Cat
	$lang_hremp_joindate 					= "入职日期"; //Joined Date
	$lang_hremp_termination_date			= "解雇日期"; //Termination Date
	$lang_hremp_termination_reason			= "解雇原因"; //Termination Reason
	$lang_hremp_SelectJobTitle				= "选择职位名称"; //Select Job Title
	$lang_hremp_EmpStatus					= "雇佣状态"; //Employment Status
	$lang_hremp_Workstation					= "工作站"; //Workstation
	$lang_hremp_Subdivision					= "部门所属"; //Sub-division
    $lang_hremp_Locations                   = "地点"; //Locations

    $lang_hremp_MaritalStatus_Unmarried		= "未婚"; //Unmarried
    $lang_hremp_MaritalStatus_Married		= "已婚"; //Married
    $lang_hremp_MaritalStatus_Divorced		= "离异"; //Divorced
    $lang_hremp_MaritalStatus_Others		= "其他"; //Others

 	$lang_hremp_dependents 					= "亲属"; //Dependents
	$lang_hremp_children 					= "子女"; //Children
	$lang_hremp_relationship 				= "关系"; //Relationship
	$lang_hremp_AssignedDependents			= "现有亲属"; //Assigned Dependents
	$lang_hremp_AssignedChildren			= "现有子女"; //Assigned Children

	$lang_hremp_AssignedEmergencyContacts   = "指定的紧急联系人"; //Assigned Emergency Contacts

	$lang_hremp_street1						= "地址1"; //Street 1
	$lang_hremp_street2 					= "地址2"; //Street 2

	$lang_hremp_hmtele 						= "家庭电话"; //Home Telephone
	$lang_hremp_mobile 						= "移动电话"; //Mobile
	$lang_hremp_worktele 					= "工作电话"; //Work Telephone
	$lang_hremp_city 						= "城市(镇)"; //City/Town
	$lang_hremp_workemail 					= "工作邮箱"; //Work Email
	$lang_hremp_otheremail 					= "其它邮箱"; //Other Email
	$lang_hremp_passport 					= "护照"; //Passport
	$lang_hremp_visa 						= "签证"; //Visa
	$lang_hremp_citizenship 				= "国籍"; //Citizenship
	$lang_hremp_passvisano 					= "证件号"; //Passport/Visa No
	$lang_hremp_issueddate 					= "签发日期"; //Issued Date
	$lang_hremp_i9status 					= "I9状态"; //I9 Status
	$lang_hremp_dateofexp 					= "到期日"; //Date of Expiry
	$lang_hremp_i9reviewdate 				= "I9复核日期"; //I9 Review Date
	$lang_hremp_AssignedPassportVisas		= "当前护照/签证"; //Assigned Passport/Visa
	$lang_hremp_path 						= "路径"; //Path
	$lang_hremp_filename 					= "文件名"; //File Name
	$lang_hremp_size 						= "大小"; //Size
	$lang_hremp_type 						= "类别"; //Type
	$lang_hremp_name 						= "姓名"; //Name
	$lang_hremp_InvalidPhone				= "不是一个有效的电话/传真号"; //Not a valid phone/fax number
	$lang_hremp_largefileignore				= "附件最大只允许1MB，大于此限制的文件将被忽略"; //1M Max, any larger attachments will be ignored
	$lang_hremp_PleaseSelectFile				= "请选择文件。"; //Please select a file.
	$lang_hremp_ShowFile					= "显示文件"; //Show File
	$lang_hremp_Save					= "保存"; //Save
	$lang_hremp_Delete					= "删除"; //Delete
	$lang_lang_uploadfailed					= "上传失败"; //Upload Failed

	$lang_hremp_browse						= "浏览"; //Browse

	$lang_hremp_AreYouSureYouWantToDeleteThePhotograph = "确定要删除照片吗"; //Are you sure you want to delete the photograph

	$lang_hremp_SelectAPhoto				= "选择照片"; //Select a Photo
	$lang_hremp_ClickToSeeFullSizeImage		= "点击图片看原图"; //Click on the photo to see the full size image
	$lang_hremp_PhotoMaxSize				= "最大允许1MB"; //1M Max
	$lang_hremp_PhotoDimensions				= "尺寸100x120"; //Dimensions 100x120

	$lang_hremp_IssedDateShouldBeBeforeExp	= "起始日期应该早于有效日期"; //Issued date should be before expiration date
	$lang_hremp_FromDateShouldBeBeforeToDate= "起始日期应该早于结束日期"; //From date should be before To date
	$lang_hremp_StaringDateShouldBeBeforeEnd= "开始日期应该早于结束日期"; //Starting Day should be before ending Date
    $lang_hremp_CommentsShouldBeLimitedTo255Chars = "注释限于255个字符"; //Comments should be limited to 255 characters
    $lang_hremp_CommentsShouldBeLimitedTo200Chars = "注释限于255个字符"; //Comments should be limited to 200 characters
    $lang_hremp_CommentsShouldBeLimitedTo100Chars = "注释限于255个字符"; //Comments should be limited to 100 characters

    $lang_hremp_TerminationReasonShouldBeLimitedTo256Chars = "终止理由应限于256个字符"; //Termination reason should be limited to 256 characters

	$lang_hremp_ContractExtensionStartDate	= "劳动合同起始日"; //Contract Extension Start Date
	$lang_hremp_ContractExtensionEndDate	= "劳动合同之终止日"; //Contract Extension End Date
	$lang_hremp_EmployeeContracts 			= "劳动合同"; //Employee Contracts
	$lang_hremp_AssignedContracts			= "劳动合同"; //Assigned Contracts

	$lang_hremp_ShowEmployeeContracts 			= "显示劳动合同"; //Show employee contracts
	$lang_hremp_HideEmployeeContracts 			= "隐藏劳动合同"; //Hide employee contracts

    $lang_hremp_ShowEmployeeJobHistory      = "显示员工历史记录"; //Show employee history
    $lang_hremp_HideEmployeeJobHistory      = "隐藏员工历史记录"; //Hide employee history

    $lang_hremp_EmployeeJobHistory          = "员工历史记录"; //Employee History
    $lang_hremp_EmployeePreviousPositions   = "曾任职务"; //Previous Positions
    $lang_hremp_EmployeePreviousSubUnits    = "曾在团队"; //Previous Sub-units
    $lang_hremp_EmployeePreviousLocations   = "曾在工作地点"; //Previous Locations
    $lang_hremp_EmployeeHistoryFrom         = "从"; //From
    $lang_hremp_EmployeeHistoryTo           = "到"; //To
    $lang_hremp_EmployeeHistoryNoItemsFound = "没有找到相关信息"; //No items found
    $lang_hremp_EmployeeAddHistoryItem      = "添加员工历史记录"; //Add Employee History Item
    $lang_hremp_EmployeeJobTitleOption      = "职位名称"; //Job Title
    $lang_hremp_EmployeeSubDivisionOption      = "分支"; //Sub Division
    $lang_hremp_EmployeeLocationOption      = "地点"; //Location
    $lang_hremp_EmployeeHistory_PleaseSelectJobTitle = "请选择一个职位名称"; //Please select a Job Title
    $lang_hremp_EmployeeHistory_PleaseSelectSubDivision = "请选择一个分支"; //Please select a sub division
    $lang_hremp_EmployeeHistory_PleaseSelectLocation = "请选择一个地点"; //Please select a location
    $lang_hremp_EmployeeHistory_StartShouldBeforeEnd = "开始的日期应该在结束日期前"; //Start date should be before end date
    $lang_hremp_EmployeeHistory_PleaseSpecifyStartDate = "请使用有效的开始日期"; //Please specify valid start date
    $lang_hremp_EmployeeHistory_PleaseSpecifyEndDate = "请使用有效的结束日期"; //Please specify valid end date

    $lang_hremp_EmployeeHistory_DatesWrong = "请输入有效的日期，开始日期应该在结束日期之前"; //Please enter valid dates. From date should not be after To date
    $lang_hremp_EmployeeHistory_ExpectedDateFormat = "预计日期格式: "; //Expected date format: 
    $lang_hremp_EmployeeHistory_DatesWithErrorsHighlighted = "用红色注释的日期中有错误"; //Dates with errors are highlighted in red 

    $lang_hremp_AddLocation                 = "添加地点"; //Add Location
    $lang_hremp_SelectLocation              = "选择地点"; //Select Location
    $lang_hremp_PleaseSelectALocationFirst  = "请先选择一个地点"; //Please select a location first
    $lang_hremp_ErrorAssigningLocation      = "指派地点错误"; //Error assigning location
    $lang_hremp_ErrorRemovingLocation      = "移除地点时出错了"; //Error removing location

	$lang_hremp_SalaryShouldBeWithinMinAndMa= "薪酬应在大小值范围内"; //Salary should be within min and max

	$lang_hremp_SelectCurrency				= "选择货币"; //Select Currency
	$lang_hremp_SelectPayGrade				= "选择薪酬等级"; //Select Pay Grade
	$lang_hremp_Currency_is_already_exist	= '货币已经存在'; //Currency is already exist

	$lang_hremp_ContractExtensionId			= "合同编号"; //Contract Extension ID
	$lang_hremp_ContractStartDate			= "合同起始日"; //Contract Start Date
	$lang_hremp_ContractEndDate				= "合同终止日"; //Contract End Date
    $lang_hremp_FieldShouldBeNumeric        = "应填入数字"; //Field should be numeric

    $lang_hremp_Language					= "语言"; //Language

 	$lang_hremplan_employeelanguageflu 		= "员工语言能力"; //Employee Language Fluency
	$lang_hremplan_fluency 					= "语言能力"; //Fluency
	$lang_hremplan_ratinggarde 				= "熟练程度"; //Fluency
	$lang_hremplan_assignlanguage 			= "添加语言"; //Assigned Languages

	$lang_hremplan_SelectLanguage			= "选择语言"; //Select Language
	$lang_hremplan_SelectFluency			= "选择语言能力"; //Select Fluency
	$lang_hremplan_SelectRating 			= "选择等级"; //Select Rating
	$lang_hremplan_NameContainsNonChars		= '语言名称只能包含字符'; //Language name can contain only characters

	$lang_hremp_PleaseSelectJobTitle= "请为此员工 {here} 选择一个职位名称"; //Please Select a Job Title for this Employee {here}

	$lang_hremp_ie_CurrentSupervisors 		= "(当前员工的上级)"; //i.e. Current Employee's Supervisors
	$lang_hremp_ie_CurrentSubordinates 		= "(当前员工的下级)"; //i.e. Current Employee's Subordinates

	$lang_hremp_ie_PleaseSpecifyAtLeastOnePhoneNo = "请至少添加一个电话号码"; //Please specify at least one phone number

 	$lang_hremplicenses_employeelicen 		= "员工证书"; //Employee Licenses
	$lang_hremplicenses_assignlicenses 		= "当前的证书"; //Assigned Licenses
	$lang_hremplicenses_licentype 			= "证书类别"; //License Type
	$lang_hremplicenses_assignlicen 		= "当前的证书"; //Assigned Licenses

	$lang_hremplicenses_NoLicenseSelected	= "尚未选择证书"; //No license selected
	$lang_hremplicenses_SelectLicenseType	= "选择证书类别"; //Select License Type

	$lang_hrempmemberships_NoMembershipTypeSelected	        = "尚未选择组织类别"; //No membership type selected
	$lang_hrempmemberships_NoMembershipSelected	        = "尚未选择组织"; //No membership selected
	$lang_hrempmemberships_NoSubscriptionOwnerSelected	= "尚未选则订阅的管理者"; //No subscription owner selected

	$lang_hremp_SelectAtLEastOneAttachment = "至少选择一个附件以便删除"; //Select at least one Attachment to Delete

 	$lang_hrEmpMain_ratinggarde 			= "熟练程度"; //Competency
	$lang_hrEmpMain_assignlanguage 			= "已添加的语言"; //Assigned Languages
	$lang_hrEmpMain_Writing 				= "写作"; //Writing
	$lang_hrEmpMain_Speaking 				= "对话"; //Speaking
	$lang_hrEmpMain_Reading 				= "阅读"; //Reading
	$lang_hrEmpMain_Poor 					= "差"; //Poor
	$lang_hrEmpMain_Basic 					= "一般"; //Basic
	$lang_hrEmpMain_Good 					= "良好"; //Good
	$lang_hrEmpMain_MotherTongue 			= "母语"; //Mother Tongue
	$lang_hrEmpMain_Individual 				= "个人"; //Individual
	$lang_hrEmpMain_employeemembership 		= "员工成员"; //Employee Memberships
	$lang_hrEmpMain_subownership 			= "申请"; //Subscription Ownership
	$lang_hrEmpMain_subamount 				= "申请数量"; //Subscription Amount
	$lang_hrEmpMain_subcomdate 				= "申请起始日"; //Subscription Commence Date
	$lang_hrEmpMain_subredate 				= "申请终止日"; //Subscription Renwal Date
	$lang_hrEmpMain_selmemtype 				= "选择组织类别"; //Select Membership Type
	$lang_hrEmpMain_selmemship 				= "选择组织"; //Select Membership
	$lang_hrEmpMain_selownership 			= "选择所有权"; //Select Ownership
	$lang_hrEmpMain_assignmemship 			= "添加组织"; //Assigned Memberships
	$lang_hrEmpMain_paygrade 				= "薪酬等级"; //Pay Grade
	$lang_hrEmpMain_currency 				= "货币"; //Currency
	$lang_hrEmpMain_minpoint 				= "最低薪酬"; //Minimum Salary
	$lang_hrEmpMain_maxpoint 				= "最高薪酬"; //Maximum Salary
	$lang_hrEmpMain_bassalary 				= "基本薪酬"; //Basic Salary
	$lang_hrEmpMain_assignedsalary 			= "添加薪酬"; //Assigned Salary
	$lang_hrEmpMain_payfrequency 			= "支付频率"; //Pay Frequency

 	$lang_hrEmpMain_heading 				= "员工报告"; //Employee Report
	$lang_hrEmpMain_supervisorsubordinator 	= "上下级"; //Supervisor / Subordinate
	$lang_hrEmpMain_reportingmethod 		= "汇报方式"; //Reporting Method
	$lang_hrEmpMain_subordinateinfomation 	= "下级"; //Subordinates
	$lang_hrEmpMain_supervisorinfomation 	= "上级"; //Supervisors
	$lang_hrEmpMain_selecttype 				= "选择方式"; //Select Method
	$lang_hrEmpMain_Direct 					= "直接"; //Direct
	$lang_hrEmpMain_Indirect 				= "间接"; //Indirect
	$lang_hrEmpMain_ReportToId 				= "编号"; //Id
	$lang_hrEmpMain_ReportToName 			= "名称"; //Name
	$lang_hrEmpMain_employeeskill 			= "员工技能"; //Employee Skills
	$lang_hrEmpMain_yearofex 				= "经验时间(年)"; //Years of Experience
	$lang_hrEmpMain_assignskills 			= "添加技能"; //Assigned Skills
	$lang_hrEmpMain_employerworkex 			= "员工工作经验"; //Employee Work Experience
	$lang_hrEmpMain_employer 				= "雇主"; //Employer
	$lang_hrEmpMain_enddate 				= "结束日期"; //End Date
	$lang_hrEmpMain_startdate 				= "开始日期"; //Start Date
	$lang_hrEmpMain_assignworkex 			= "添加工作经历"; //Assigned Work Experience
	$lang_hrEmpMain_workexid 				= "工作经历编号"; //Work Experience ID
	$lang_hrEmpMain_internal 				= "内部"; //Internal
	$lang_hrEmpMain_major 					= "主修/专业"; //Major/Specialization
	$lang_hrEmpMain_education 				= "教育水平"; //Education
	$lang_hrEmpMain_gpa 					= "平均分/总分"; //GPA/Score
	$lang_hrEmpMain_assigneducation 		= "添加教育"; //Assigned Education
	$lang_hrEmpMain_assignattach 			= "添加附件"; //Assigned Attachments

	$lang_hrEmpMain_SelectEducation			= "选择教育"; //Select Education
	$lang_hrEmpMain_YearsOfExperiencCannotBeBlank = "经验时间不可为空"; //Years of Experience Cannot be Blank
	$lang_hrEmpMain_YearsOfExperiencWrongFormat = "经验时间-输入格式错误"; //Years of Experience - Wrong input format
	$lang_hrEmpMain_YearsOfExperiencBetween = "经验时间应在此范围内：#range"; //Years of Experience should be a value between #range
	$lang_hrEmpMain_Skill 					= "技能"; //Skill
	$lang_hrEmpMain_EnterFromDateFirst      = "请先输入起始时间"; //Enter From Date first

	$lang_hrEmpMain_subown_Company = '公共'; //Company
	$lang_hrEmpMain_subown_Individual = '私有'; //Individual

	$lang_hrEmpMain_arrRepType_Supervisor = '上级'; //Supervisor
	$lang_hrEmpMain_arrRepType_Subordinate = '下级'; //Subordinate

	$lang_hrEmpMain_arrRepMethod_Direct = '直接'; //Direct
	$lang_hrEmpMain_arrRepMethod_Indirect = '间接'; //Indirect

	$lang_hrEmpMain_SelectMethod = '选择方式'; //Select Method

	$lang_hrEmpMain_SubscriptionAmountShouldBeNumeric = "会员数应为数字"; //Subscription amount should be numeric
	$lang_hrEmpMain_MemebershipSubAmountIsEmptyContinue = "会员数为空，要继续么?"; //Membership subscription amount is empty. Do you want to continue

	$lang_hrEmpMain_CommenceDateShouldBeBeforeRenewalDate = "起始日期应在终止日期前"; //Commence Date should be before renewal date

	$lang_hrEmpMain_membershiptype = "组织类别"; //Membership Type
	$lang_hrEmpMain_membership = "组织"; //Membership

	$lang_hrEmpMain_FederalIncomeTax = "联邦所得税"; //Federal Income Tax
	$lang_hrEmpMain_TaxStatus = "状态"; //Status
	$lang_hrEmpMain_TaxExemptions = "豁免"; //Exemptions

	$lang_hrEmpMain_TaxStatusSelect = "--选择--"; //--Select--
	$lang_hrEmpMain_TaxStatusMarried = "婚姻状态"; //Married
	$lang_hrEmpMain_TaxStatusSingle = "单身"; //Single
	$lang_hrEmpMain_TaxStatusNonResidentAlien = "非居民外国人"; //Non Resident Alien
	$lang_hrEmpMain_TaxStatusNotApplicable = "不适用"; //Not Applicable

	$lang_hrEmpMain_StateIncomeTax = "省所得税"; //State Income Tax
	$lang_hrEmpMain_TaxState = "省"; //State
	$lang_hrEmpMain_TaxUnemploymentState = "非工作状态"; //Unemployment State
	$lang_hrEmpMain_TaxWorkState = "工作状态"; //Work State";

	$lang_hrEmpMain_DirectDebitAccount = "账号"; //Account
	$lang_hrEmpMain_DirectDebitAccountType = "账号类型"; //Account Type
	$lang_hrEmpMain_DirectDebitAccountTypeChecking = "审核中"; //Checking
	$lang_hrEmpMain_DirectDebitAccountTypeSavings = "储蓄"; //Savings
	$lang_hrEmpMain_DirectDebitRoutingNumber = "借记代号"; //Routing Number
	$lang_hrEmpMain_DirectDebitAmount = "数额"; //Amount
	$lang_hrEmpMain_DirectDebitTransactionType = "交易类型"; //Transaction Type

	$lang_hrEmpMain_DirectDebitSelectTransactionType = "--选择--"; //--Select--

	$lang_hrEmpMain_DirectDebitTransactionTypeBlank = "空白"; //Blank
	$lang_hrEmpMain_DirectDebitTransactionTypePercentage = "百分比"; //Percentage
	$lang_hrEmpMain_DirectDebitTransactionTypeFlat = "单位"; //Flat
	$lang_hrEmpMain_DirectDebitTransactionTypeFlatMinus = "单位 - "; //Flat - 

	$lang_hrEmpMain_DirectDebitAssigned = "指定的帐户直接转帐"; //Assigned Direct Debit Accounts
	$lang_hrEmpMain_DirectDebitAccountShouldBeSpecified = "帐户应指定"; //Account should be specified
	$lang_hrEmpMain_DirectDebitRoutingNumberShouldBeSpecified = "借记号码应指定"; //Routing number should be specified
	$lang_hrEmpMain_DirectDebitRoutingNumberShouldBeNumeric = "借记号码必须是数字"; //Routing number should be numeric
	$lang_hrEmpMain_DirectDebitAmountShouldBeSpecified = "数额应指定"; //Amount should be specified
	$lang_hrEmpMain_DirectDebitAmountShouldBeNumeric = "数额必须是数字"; //Amount should be numeric
	$lang_hrEmpMain_DirectDebitAmountTooLarge = "数额太大"; //Amount is too large";
	$lang_hrEmpMain_DirectDebitTransactionTypeShouldBeSelected = "必须选择转账类型"; //Transaction Type should be selected

 	$lang_jobtitle_heading 					= "职位：职位名称"; //Job : Job Title
	$lang_jobtitle_jobtitid 				= "职位编号"; //Job Title ID
	$lang_jobtitle_jobtitname 				= "职位名称"; //Job Title Name
	$lang_jobtitle_jobtitdesc 				= "职位描述"; //Job Description
	$lang_jobtitle_jobtitcomments 			= "职位注释"; //Job Title Comments
    $lang_jobtitle_jobspec                  = "工作规范"; //Job Specification
	$lang_jobtitle_addpaygrade 				= "添加薪酬等级"; //Add Pay Grade
	$lang_jobtitle_emstatExpl 				= "依据职位名称定义雇佣状态"; //Define the Employment Status allowed for the Job Title
	$lang_jobtitle_editpaygrade 			= "编辑薪酬等级"; //Edit Pay Grade
	$lang_jobtitle_addempstat 				= "添加雇用状态"; //Add Employment Status
	$lang_jobtitle_editempstat 				= "编辑雇用状态"; //Edit Employment Status
	$lang_jobtitle_empstat 					= "雇用状态"; //Employment Status
	$lang_jobtitle_NameShouldBeSpecified    = "请指定职位名称"; //Job Title Name should be specified
	$lang_jobtitle_DescriptionShouldBeSpecified = "请指定职位描述"; //Job Description should be specified
	$lang_jobtitle_PayGradeNotSelected      = "薪酬等级未被选中"; //Pay Grade not selected
    $lang_jobtitle_ShowingSavedValues       = "当前显示的，是你最后一次保存于会话中的数值。"; //Currently showing the values saved in session when you last edited this record.
    $lang_jobtitle_NoSelection              = "没有选择！"; //No Selection!
    $lang_jobtitle_PleaseSelectEmploymentStatus = "请选择雇佣状态"; //Please select employement status
    $lang_jobtitle_EnterEmploymentStatus    = "请为雇佣状态输入一个编号。"; //Please enter a value for Employment Status.
 	$lang_jobspec_heading 					= "职位：工作规范"; //Job : Job Specifications
 	$lang_jobspec_id 				        = "编号"; //ID
	$lang_jobspec_name 				        = "名称"; //Name
	$lang_jobspec_desc 				        = "描述"; //Description
	$lang_jobspec_duties 			        = "职责"; //Duties
	$lang_jobspec_PleaseSpecifyJobSpecName  = "请指定一个工作规范名称"; //Please specify Job Specification name
	$lang_jobspec_NameInUse_Error           = "这个名称已经被使用"; //This name is in use


 	$lang_languageinformation_heading 		= "能力：语言"; //Skills : Language

 	$lang_licenses_heading 					= "任职资格：证书"; //Qualification : Licenses

 	$lang_locations_heading 				= "公司信息：地点"; //Company Info : Locations
 	$lang_locations_NameHasToBeSpecified    = "请输入地点"; //Location Name has to be specified
 	$lang_locations_CountryShouldBeSelected = "请选择国家！"; //Country should be selected!
 	$lang_locations_AddressShouldBeSpecified = "请输入地址"; //Address should be specified
 	$lang_locations_ZipCodeShouldBeSpecified = "请输入邮编"; //Zip Code should be specified
 	$lang_locations_ZipContainsNonNumericChars = "邮政编码含有非数字字符，是否继续?"; //Zip - Code Contains non-numeric characters. Do you want to continue?
 	$lang_locations_InvalidCharsInPhone = "电话号码含无效的字符"; //Phone number contains invalid characters
 	$lang_locations_InvalidCharsInFax = "传真号码含无效的字符"; //Fax contains invalid characters

 	$lang_membershipinfo_heading 			= "组织：组织"; //Memberships : Membership
	$lang_membershipinfo_membershiptype 	= "组织类别"; //Membership Type
	$lang_membershipinfor_selectmember 		= "选择组织"; //Select Membership
	$lang_membershipinfo_MembershipShouldBeSpecified = "请输入组织名"; //Membership Name should be specified
	$lang_membershipinfo_MembershipTypeShouldBeSelected = "请输入组织类别"; //Membership Type should be selected

 	$lang_membershiptypes_heading 			= "会员组织：组织类别"; //Memeberships : Membership Type
 	$lang_membershiptypes_NameShouldBeSpecified = "请输入组织类别名"; //Membership Type name should be specified

 	$lang_nationalityinformation_heading 	= "国籍&民族：国籍"; //Nationality & Race : Nationality
 	$lang_nationalityinformation_PleaseEnterNationality = "请输入国籍"; //Please Enter a Nationality Name

 	$lang_provinceinformation_heading 		= "国家/地区信息：地理信息"; //State/Province Information : Geo Information

 	$lang_qualificationtypes_heading 		= "资格类型：资格信息"; //Qualification Types : Qualifications Information
	$lang_repview_ReportID 					= "报告编号"; //Report ID
	$lang_repview_ReportName 				= "报告名称"; //Report Name
	$lang_repview_ViewEmployeeReports 		= "查看员工报表"; //View Employee Reports
	$lang_repview_message 					= "删除可能会影响公司结构信息。"; //Deletion might affect Company Hierarchy
	$lang_repview_DefineEmployeeReports 	= "定义员工报告"; //Define Employee Reports
	$lang_repview_message2 					= "删除可能会影响报告的结构式样"; //Deletion might affect viewing of reports

 	$lang_routeinformation_heading 			= "路线信息：路线信息"; //Route Information : Route Information
	$lang_salarygrades_heading 				= "职位：薪酬等级"; //Job : Pay Grade
	$lang_salarygrades_currAss 				= "指定的货币"; //Currency Assigned
    $lang_salarygrades_AssignedCurrencies   = "指定的货币"; //Assigned currencies
    $lang_salarygrades_EditAssignedCurrency = "修改指定的货币"; //Edit Assigned currency
    $lang_salarygrades_AssignNewCurrency    = "指定新货币"; //Assign new currency
	$lang_salarygrades_stepSal 				= "增长幅度"; //Step Increase
	$lang_salarygrades_selectcurrency		= "请选择一种货币"; //Currency field should be selected
	$lang_salarygrades_minSalNumeric		= "最小薪酬应为数字"; //Minimum salary should be numeric
	$lang_salarygrades_maxSalNumeric		= "最大薪酬应为数字"; //Maximum salary should be numeric
	$lang_salarygrades_stepSalNumeric		= "增长幅度应为数字"; //Step salary should be numeric
    $lang_salarygrades_minGreaterThanMax	= "最高薪酬应不小于最低薪酬!"; //Minimum Salary > Maximum Salary !
	$lang_salarygrades_stepPlusMinGreaterThanMax = "增长幅度加最小薪酬不应超过最大薪酬"; //Step Salary plus Minimum Salary should be less than Maximum salary
	$lang_salarygrades_stepGreaterThanMax = "增长幅度不应高于最大薪酬"; //Step Salary should be less than Maximum salary
	$lang_salarygrades_NameCannotBeBlank = "薪酬等级名不能为空！"; //Pay Grade Name cannot be blank!

	$lang_Error_salarygrades_DUPLICATE_NAME_FAILURE		= "添加薪酬级别失败. 名称重复"; //Failed to add Pay Grades. Cannot have duplicate names
	$lang_Error_salarygrades_ADD_FAILURE				= "添加薪酬级别失败"; //Failed to add Pay Grades

	$lang_salcurrdet_heading 				= "薪酬的货币种类"; //Currency Assignment to Salary Grade
	$lang_salcurrdet_assigncurr 			= "指定货币"; //Assigned Currency

 	$lang_satutoryinfo_heading 				= "法定类型：关系信息"; //Statutory Type : Nexus Information

 	$lang_view_EmploymentStatusID 			= "雇佣状态编号"; //Employment Status ID
	$lang_view_EmploymentStatusName 		= "雇佣状态名称"; //Employment Status Name
	$lang_view_deletePrompt                 = "删除操作不可恢复"; //Deletion cannot be undone
	$lang_view_message 						= "删除可能会影响职位名称。"; //Deletion may affect Job Titles
	$lang_view_message1 					= "删除可能会影响员工信息中的薪酬等级。"; //Deletion may affect Pay Grade of Employees in PIM
	$lang_view_SkillName 					= "技能名称"; //Skill Name
	$lang_view_SkillID 						= "技能编号"; //Skill ID
	$lang_view_message3 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_LocationName 				= "地点名"; //Location Name
	$lang_view_message4 					= "删除可能会影响公司结构，如果地点信息存在其它引用关系，可能无法删除。"; //Deletion might affect Company Hierarchy. If the Location has associations deletion may fail
	$lang_view_CurrencyName 				= "货币名称"; //Currency Name
	$lang_view_CurrencyTypes 				= "货币类型"; //Currency Types
	$lang_view_message5 					= "删除可能会影响薪酬货币详情。"; //Deletion might affect Salary Currency Detail
	$lang_view_CompanyHierarchy 			= "公司结构"; //Company Hierarchy
	$lang_view_CompanyHierarchyName 		= "公司结构名称"; //Company Hierarchy Name
	$lang_view_message6 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_QualificationType 			= "任职资格类型"; //Qualification Type
	$lang_view_QualificationName 			= "任职资格名称"; //Qualification Name
	$lang_view_message9 					= "删除可能会影响任职资格关系、任职资格定义和员工任职资格。"; //Deletion might affect Qualifications, Designation Qualification, Employee Qualification
	$lang_view_RatingMethod 				= "分级方式"; //Rating Method
	$lang_view_RatingMethodName 			= "分级方式名称"; //Rating Method Name
	$lang_view_message10 					= "删除可能会影响任职资格、语言信息。"; //Deletion might affect Qualification, Languages
	$lang_view_CorporateTitle 				= "公司头衔"; //Corporate Title
	$lang_view_CorporateTitleName 			= "公司名称"; //Corporate Title name
	$lang_view_message11 					= "删除可能会影响员工信息和其它定义。"; //Deletion might affect employee information, Designations
	$lang_view_ExtraCategory 				= "额外课程活动种类"; //Extra Curricular Activity Category
	$lang_view_ExtraCategoryName 			= "额外课程活动种类名称"; //Extra Curricular Activity Category Name
	$lang_view_message12 					= "删除可能会影响额外课程活动，员工的额外课程活动。"; //Deletion might affect Ex. Curr. Activities, Employee Ex. Curr. Activities
	$lang_view_MembershipTypeName 			= "成员类型名称"; //Membership Type Name
	$lang_view_message13 					= "删除可能会影响员工会员组织关系。"; //Deletion might affect employee memberships, memberships
	$lang_view_EmployeeCategoryName 		= "员工种类名称"; //Employee Category Name
	$lang_view_message14 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_EmployeeGroupName 			= "员工组织名称"; //Employee Group Name
	$lang_view_message15 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_NationalityName 				= "国籍名称"; //Nationality Name
	$lang_view_message16 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_CountryID 					= "地区编号"; //Country ID
	$lang_view_CountryName 					= "地区名称"; //Country Name
	$lang_view_message17 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_HierarchyDefinition 			= "等级制度定义"; //Hierarchy Definition
	$lang_view_HierarchyDefinitionName 		= "等级制度定义名称"; //Hierarchy Definition Name
	$lang_view_message18 					= "删除可能会影响公司结构信息。"; //Deletion might affect Company Hierachy
	$lang_view_StateProvinceName 			= "国家/地区名称"; //State/Province Name
	$lang_view_message19 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_CityName 					= "城市"; //City Name
	$lang_view_message20 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_LanguagName 					= "语言名称"; //Language Name
	$lang_view_message21 					= "删除可能会影响员工语言定义。"; //Deletion might affect employee language
	$lang_view_Membership 					= "组织"; //Membership
	$lang_view_MembershipType 				= "组织类别"; //Membership Type
	$lang_view_MembershipName 				= "组织名称"; //Membership Name
	$lang_view_Type 					= "类别"; //Type
	$lang_view_message22 					= "删除可能会影响员工的会员组织关系。"; //Deletion might affect employee membership
	$lang_view_ExtraActivities 				= "额外课程活动"; //Extra Curricular Activities
	$lang_view_ExtraActivitiesName 			= "额外课程活动名称"; //Extra Curricular Activities Name
	$lang_view_message23 					= "删除可能会影响员工业余活动信息。"; //Deletion might affect employee ex. curr. activities
	$lang_view_PayGradeName 				= "薪酬等级名称"; //Pay Grade Name
	$lang_view_message24 					= "删除可能会影响员工信息中、职位名称。"; //Deletion might affect employee information, Job Titles
	$lang_view_message25 					= "删除可能会影响教育水平信息。"; //Deletion might affect Education
	$lang_view_EmployeeTypeID 				= "员工类型编号"; //Employee TypeID
	$lang_view_EmployeeTypeName 			= "员工类型名称"; //Employee Type Name
	$lang_view_message26 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_EEOJobCategory 				= "工作种类"; //EEO Job Category
	$lang_view_EEOJobCategoryid 			= "工作种类编号"; //EEO Job Category Id
	$lang_view_EEOJobCategoryName 			= "工作种类名称"; //EEO Job Category Name
	$lang_view_message27 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_message28 					= "删除可能会影响员工语言信息。"; //Deletion might affect employee language
	$lang_view_EthnicRace 					= "民族"; //Ethnic Race
	$lang_view_EthnicRaceName 				= "民族名称"; //Ethnic Race Name
	$lang_view_message29 					= "删除可能会影响员工的记录。"; //Deletion might affect employee records
	$lang_view_message30 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_message31 					= "删除可能会影响员工信息、公司名称信息。"; //Deletion might affect employee information, Corporate Titles
	$lang_view_message32 					= "删除可能会影响任职资格、指定任职资格、员工任职资格信息。"; //Deletion might affect Qualifications, Designation Qualification, Employee Qualification
	$lang_view_License_ID 					= "证书编号"; //License ID
	$lang_view_LicenseDescription 			= "证书描述"; //License Description
	$lang_view_message33 					= "删除可能会影响员工信息。"; //Deletion might affect employee information
	$lang_view_UserID 						= "用户编号"; //User ID
	$lang_view_UserName 					= "用户名称"; //User Name
	$lang_view_message34 					= "删除可能导致本系统无法使用。"; //Deletion could make OrangeHRM unusable
	$lang_view_UserGroupID 					= "用户组编号"; //User Group ID
	$lang_view_UserGroupName 				= "用户组名称"; //User Group Name
	$lang_view_message35 					= "删除可能导致本系统无法使用。"; //Deletion could make OrangeHRM unusable
        $lang_view_DeleteUserGroup                              = "用户置于本组将失去其特权"; //Users belonging to the group will lose their privileges

	$lang_view_Users 				= "用户"; //Users
	$lang_view_UserGroups 			= "管理员用户组"; //Admin User Groups
	$lang_view_HRAdmin 				= "人事管理"; //HR Admin
	$lang_view_ESS 					= "自助服务"; //ESS
	$lang_view_ID 					= "编号"; //ID

	//Customer
	$lang_view_CustomerId = "客户编号"; //Customer Id
	$lang_view_CustomerName = "客户名称"; //Customer Name
	$lang_customer_Heading          = "客户"; //Customer

	$lang_index_WelcomeMes 			= "欢迎 #username"; //Welcome #username
	$lang_index_ChangePassword 		= "更改密码"; //Change Password
	$lang_index_Logout 				= "退出"; //Logout

	$lang_MailFrom = "以此地址作为发件人"; //Mail Sent As
	$lang_MailSendingMethod = "发送方法"; //Sending Method
	$lang_MailTypes_Mail = "内部的PHP函数"; //Internal PHP function
	$lang_MailTypes_Sendmailer = "Send Mail程序"; //Send Mail
	$lang_MailTypes_Smtp = "SMTP";
	$lang_SendmailPath = "Sendmail路径"; //Path to Sendmail
	$lang_EmailAuthentication = "SMTP 需要身份认证"; //Use SMTP Authentication
	$lang_SmtpHost = "SMTP主机"; //SMTP Host
	$lang_SmtpPort = "SMTP端口"; //SMTP Port
	$lang_SmtpUser = "SMTP用户"; //SMTP User
	$lang_SmtpPassword = "SMTP用户密码"; //SMTP Password
	$lang_EmailSecurity = "使用安全连接"; //Use Secure Connection
	$lang_Email_SSL = "SSL";
	$lang_Email_TLS = "TLS";
	$lang_SmtpSendTestEmail = "发送测试邮件"; //Send Test Email
	$lang_SmptTestEmailAddress = "测试邮件 Email 地址"; //Test Email Address
	$lang_Email_SendMail_Instructions = "请在 php.ini 文件中修改 sendmail_path 变量的值来确定 sendmail 的正确路径。"; //Please set correct path to sendmail by changing sendmail_path in php.ini

    $lang_SmtpPathEditDisabled = "SMTP的路径编辑被禁用。请对lib/confs/mailConf.php直接进行编辑。"; //Editing of SMTP Path is disabled. Please edit lib/confs/mailConf.php directly to edit.
    $lang_SmtpPathEditHowToEnable = "因安全问题不建议通过浏览器启用SMTP的路径编辑，但可以通过编辑lib/confs/sysConf.php完成";//Enabling editing of SMTP path via a browser is not recommended due to security issues, but can be done by editing lib/confs/sysConf.php

    $lang_SmtpPathEditEnabledLocalhost = "警告！启用本地主机SMTP的路径编辑"; //WARNING! Editing of SMTP Path is enabled for localhost.
    $lang_SmtpPathEditEnabled = "警告！SMTP的路径编辑已启用。这是不安全的。"; //WARNING! Editing of SMTP Path is enabled. This is not secure.";
    $lang_SmtpPathHowtoDisable = "一旦停用，请通过编辑lib/confs/sysConf.php完成配置"; //Please disable once configuration is complete by editing lib/confs/sysConf.php

	// Email Configuration Validation
	$lang_Error_FromEmailEmpty = "'发件人'不能为空。输入有效的 email 地址"; //'Mail Sent As' cannot be empty. Enter a valid email address
	$lang_Error_FromEmailInvalid = "'发件人'必须是有效的 email 地址"; //'Mail Sent As' should be a valid email address
	$lang_Error_SmtpHostEmpty = "'SMTP 主机' 不能为空"; //'SMTP Host' cannot be empty
	$lang_Error_SmtpPortEmpty = "'SMTP 端口' 不能为空"; //'SMTP Port' cannot be empty
	$lang_Error_Invalid_Port = "无效的 SMTP 端口"; //Invalid SMTP Port
	$lang_Error_SmtpUsernameEmpty = "'SMTP 用户名' 不能为空"; //'SMTP User' cannot be empty
	$lang_Error_SmtpPasswordEmpty = "'SMTP 密码' 不能为空"; //'SMTP Password' cannot be empty
	$lang_Error_TestEmailEmpty = "测试邮件 Email 地址是空的"; //Test Email Address is empty
	$lang_Error_TestEmailValid = "测试邮件 Email 地址无效"; //Test Email Address is invalid

	//Projects
	$lang_view_Project_Heading = "项目"; //Project
	$lang_view_ProjectId = "项目编号"; //Project Id
	$lang_view_ProjectName = "项目名称"; //Project Name

	// Data Export
	$lang_DataExport_Title = "导出人事数据"; //Export HR Data
	$lang_DataExport_Type = "导出类型"; //Export Type
	$lang_DataExport_ExportTypeNotSelected = "没有选择导出类型"; //Export Type not selected
	$lang_DataExport_Export = "导出"; //Export
	$lang_DataExport_PluginsAreMarked = "有（＋）标识的导出类型已经被定义且不能在界面上编辑."; //Export Types marked with (+) are defined in Plugin files and are not editable via the UI.
	$lang_DataExport_CustomExportTypesCanBeManaged = "可以管理个性化导出类型"; //Custom export types can be managed 
	$lang_DataExport_ClickingHereLink = "这里"; //here

	// Define Custom Data Export
	$lang_DataExport_CustomExportId = "编码"; //ID
	$lang_DataExport_CustomExportName = "导出名称"; //Export Name
	$lang_DataExportCustom_Title = "个性化导出定义"; //Custom Export Definitions
	$lang_DataExport_DefineCustomField_Heading = "定义个性化导出"; //Define Custom Export
	$lang_DataExport_AssignedFields = "已定义导出内容"; //Assigned Fields
	$lang_DataExport_AvailableFields = "未定义导出内容"; //Available Fields
	$lang_DataExport_Add = "添加"; //Add
	$lang_DataExport_Remove = "删除"; //Remove
	$lang_DataExport_PleaseSpecifyExportName = "请指定导出的名称"; //Please specify export name
	$lang_DataExport_Error_NoFieldSelected = "没有选择导出内容"; //No Field Selected
	$lang_DataExport_Error_AssignAtLeastOneField = "请至少指定一个导出内容"; //Please assign at least one field
	$lang_DataExport_Error_NameInUse = "这个名字已被使用."; //This name is in use.
	$lang_DataExport_Error_NoFieldSelectedForMove = "请至少从指定内容中选择一个导出内容"; //Please select at least one field from the Assigned fields to move
	$lang_DataExport_MoveUp = "向上移动选择内容"; //Move selected fields up
	$lang_DataExport_MoveDown = "向下移动选择内容"; //Move selected fields down

	// Data Import
	$lang_DataImport_Title = "导入人事数据"; //Import HR Data
	$lang_DataImport_Type = "导入类型"; //Import Type
	$lang_DataImport_CSVFile = "CSV文件"; //CSV File
	$lang_DataImport_ImportTypeNotSelected = "没有选择导入类型"; //Import Type not selected
	$lang_DataImport_Import = "导入"; //Import
	$lang_DataImport_PluginsAreMarked = "有（＋）标识的导入类型已经被定义且不能在界面上编辑。"; //Import Types marked with (+) are defined in Plugin files and are not editable via the UI.
	$lang_DataImport_CustomImportTypesCanBeManaged = "可以管理个性化导入类型"; //Custom import types can be managed 
	$lang_DataImport_ClickingHereLink = "点击这里"; //here
	$lang_DataImport_Error_PleaseSelectFile = "请选择一个CSV文件"; //Please select a CSV File
	$lang_DataImport_Error_Invalid_File = "无效的CSV文件类型"; //CSV File - Invalid file type

	// Data Import Status
	$lang_DataImportStatus_Title = "数据导入状态"; //Data Import Status
	$lang_DataImportStatus_ContinuingDataImport = "导入成功，继续导入数据"; //Upload Successful. Continuing with Data Import
	$lang_DataImportStatus_Summary = "总结"; //Summary
	$lang_DataImportStatus_Details = "详细错误信息"; //Details of failed rows
	$lang_DataImportStatus_NothingImported = "没有导入行"; //No rows were imported
	$lang_DataImportStatus_ImportSuccess = "导入成功"; //Import successful
	$lang_DataImportStatus_ImportFailed = "导入失败，没有行被导入"; //Import failed, no rows imported
	$lang_DataImportStatus_ImportSomeFailed = "一些行导入失败"; //Some rows failed to import
	$lang_DataImportStatus_NumImported = "导入的行数"; //No. of rows imported
	$lang_DataImportStatus_NumFailed = "导入失败的行数"; //No. of rows which failed to import
	$lang_DataImportStatus_NumSkipped = "跳过的标题行数"; //No. of header rows skipped
	$lang_DataImportStatus_TimeRemainingSeconds = "秒"; //seconds
	$lang_DataImportStatus_FinalResult = "最终结果"; //Final result
	$lang_DataImportStatus_ImportInProgress = "导入正在进行中..."; //Import in progress...
	$lang_DataImportStatus_ImportCompleted = "导入完成"; //Import completed
	$lang_DataImportStatus_Progress = "进度"; //Progress
	$lang_DataImportStatus_ETA = "ETA";
	$lang_DataImportStatus_Heading_Row = "行"; //Row
	$lang_DataImportStatus_Heading_Error = "错误"; //Error
	$lang_DataImportStatus_Heading_Comments = "注释"; //Comments

	$lang_DataImportStatus_Error_IMPORT_ERROR = "导入错误"; //Import error 
	$lang_DataImportStatus_Error_INCORRECT_COLUMN_NUMBER = "列数不正确"; //Incorrect number of columns
	$lang_DataImportStatus_Error_MISSING_WORKSTATION = "没有找到工作台"; //Workstation not found
	$lang_DataImportStatus_Error_COMPULSARY_FIELDS_MISSING_DATA = "重要数据丢失"; //Compulsary fields missing in data
	$lang_DataImportStatus_Error_DD_DATA_INCOMPLETE = "直接存入数据不完整"; //Direct Deposit data is not complete
	$lang_DataImportStatus_Error_INVALID_TYPE = "无效的数据内容"; //Invalid field data type
	$lang_DataImportStatus_Error_DUPLICATE_EMPLOYEE_ID = "员工编号已被使用"; //Employee ID is in use
	$lang_DataImportStatus_Error_DUPLICATE_EMPLOYEE_NAME = "员工名字已存在"; //Employee with same name exists
	$lang_DataImportStatus_Error_FIELD_TOO_LONG = "内容太长"; //Field too long

	// Define Custom Data Import
	$lang_DataImport_CustomImportId = "编号"; //ID
	$lang_DataImport_CustomImportName = "导入名称"; //Import Name
	$lang_DataImportCustom_Title = "个性化导入设置"; //Custom Import Definitions
	$lang_DataImport_DefineCustomField_Heading = "设置个性化导入"; //Define Custom Import
	$lang_DataImport_ContainsHeader = "包含标题"; //Contains Header
	$lang_DataImport_ContainsHeaderDescription = "选择后，CSV文件的第一行会被跳过"; //If selected, OrangeHRM will skip first line of CSV file
	$lang_DataImport_AssignedFields = "指定的内容"; //Assigned Fields
	$lang_DataImport_AvailableFields = "未指定的内容"; //Available Fields
	$lang_DataImport_Add = "添加"; //Add
	$lang_DataImport_Remove = "删除"; //Remove
	$lang_DataImport_PleaseSpecifyImportName = "请指定导入名称"; //Please specify import name
	$lang_DataImport_Error_NoFieldSelected = "没有选定导入内容"; //No Field Selected
	$lang_DataImport_Error_AssignAtLeastOneField = "请至少指定一个导入内容"; //Please assign at least one field
	$lang_DataImport_Error_NameInUse = "这个名称已被使用."; //This name is in use.
	$lang_DataImport_Error_NoFieldSelectedForMove = "请选择至少一个内容移除"; //Please select at least one field from the Assigned fields to move
	$lang_DataImport_MoveUp = "向上移动选择内容"; //Move selected fields up
	$lang_DataImport_MoveDown = "向下移动选择内容"; //Move selected fields down
	$lang_DataImport_Error_AssignCompulsaryFields = "下面的内容没有指定"; //The following compulsary fields have not been assigned
	$lang_DataImport_CompulsaryFields = "下面的内容必须被指定"; //The following fields are compulsary and must be assigned
	$lang_DataImport_Error_CantRemoveCompulsaryFields = "不能移除以下内容"; //The following fields are compulsary and cannot be removed

	// Define custom data export CSV headings
	$lang_DataExport_DefineCustomFieldHeadings_Heading = "定义CSV标题"; //Define CSV Heading for Custom Export
	$lang_DataExport_ColumnHeadings = "CSV栏目标题"; //CSV column headings
	$lang_DataExport_EditColumnHeadings = "如需要可编辑栏目标题."; //Edit column headings if needed.
	$lang_DataExport_Error_AllHeadingsMustBeSpecified = "所有的栏目标题必须被指定"; //All column headings must be specified
	$lang_DataExport_Error_CommaNotAllowedInHeadings = "标题中不允许有(,)字符"; //The comma (,) character is not allowed in headings

	// Custom Fields
	$lang_CustomFields_Title = "自定义内容"; //Custom Fields
	$lang_CustomFields_CustomFieldId = "自定义内容编号"; //Custom Field Id
	$lang_CustomFields_CustomFieldName = "自定义内容名称"; //Custom Field Name
	$lang_CustomFields_CustomFieldNumber = "内容数"; //Field Number
	$lang_customeFields_Heading = "自定义内容"; //Custom Fields
	$lang_customeFields_FieldName = "内容名称"; //Field Name
	$lang_customeFields_Type = "类型"; //Type
	$lang_customeFields_StringType = "字串"; //String
	$lang_customeFields_SelectType = "下拉"; //Drop Down
	$lang_customeFields_SelectOptions = "选项"; //Select Options
	$lang_Admin_CustomeFields_PleaseSpecifyCustomFieldName = "请指定自定义内容名称"; //Please specify custom field name
	$lang_Admin_CustomeFields_PleaseSpecifySelectOptions = "请提供选项"; //Please specify select options
	$lang_Admin_CustomeFields_SelectOptionsHint = "请输入选择内容并用逗号隔开"; //Enter allowed options separated by commas
	$lang_Admin_CustomeFields_MaxCustomFieldsCreated = "最大数目的选择内容已经设定完成."; //The maximum number of custom fields have been created.
	$lang_pim_CustomFields_NoCustomFieldsDefined = "没有定义自定义内容."; //No custom fields defined.

	// PIM tab labels
	$lang_pim_PersonalDetails = '个人资料'; //Personal Details
	$lang_pim_Employment = '雇用'; //Employment
	$lang_pim_Qualifications = '任职资格'; //Qualifications
	$lang_pim_EmployeeList = '员工列表'; //Employee List
	$lang_pim_AddEmployee = '添加员工'; //Add Employee
    $lang_pim_Other = '其他'; //Other

	$lang_pim_tabs_Personal = "个人"; //Personal
	$lang_pim_tabs_Contact = "联系方式"; //Contact
	$lang_pim_tabs_EmergencyContacts = "紧急联系人"; //Emergency Contacts
	$lang_pim_tabs_Dependents = "亲属"; //Dependents
	$lang_pim_tabs_Immigration = "护照签证"; //Immigration
	$lang_pim_tabs_Job = "职位"; //Job
	$lang_pim_tabs_Payments = "薪酬"; //Payments
	$lang_pim_tabs_ReportTo = "工作关系"; //Report-to
	$lang_pim_tabs_WorkExperience = "工作经历"; //Work experience
	$lang_pim_tabs_Education = "教育"; //Education
	$lang_rep_Languages = "语言"; //Languages
	$lang_pim_tabs_Skills = "技能"; //Skills
	$lang_pim_tabs_Languages = "语言"; //Languages
	$lang_pim_tabs_License = "证书"; //License
	$lang_pim_tabs_Membership = "组织"; //Membership
	$lang_pim_tabs_Attachments = "附件"; //Attachments
	$lang_pim_tabs_Tax = "免税"; //Tax Exemptions
	$lang_pim_tabs_DirectDebit = "直接存款"; //Direct Deposit
	$lang_pim_tabs_Custom = "自定义"; //Custom
	$lang_pim_tabs_Photo = "照片"; //Photograph

	$lang_pim_ClickToEditPhoto = "点击后编辑照片"; //Click to edit photo

	// Report module
	$lang_rep_SelectionCriteria = "选择条件"; //Selection Criteria
	$lang_rep_EmpNo = "员工编号"; //Emp No
	$lang_rep_Employee = "员工"; //Employee
	$lang_rep_AgeGroup = "年龄"; //Age Group
	$lang_rep_DateBirth = "出生日期"; //Date Of Birth
	$lang_rep_PayGrade = "薪酬等级"; //Pay Grade
	$lang_rep_Education = "教育"; //Education
	$lang_rep_EmploymentStatus = "雇佣状态"; //Employment Status
	$lang_rep_ServicePeriod = "工作年限"; //Service Period
	$lang_rep_JoinedDate = "入职日期"; //Joined Date
	$lang_rep_JobTitle = "职位"; //Job Title
	$lang_rep_Language = "语言"; //Language
	$lang_rep_Skill = "技能"; //Skill

	$lang_rep_LastName = "姓"; //Last Name
	$lang_rep_FirstName = "名"; //First Name
	$lang_rep_Address = "地址"; //Address
	$lang_rep_TelNo = "电话"; //Tel No
	$lang_rep_DateOfBirth = "出生日期"; //Date Of Birth
	$lang_rep_JoinDate = "入职日期"; //Join Date
	$lang_rep_Qualification = "任职资格"; //Qualification
	$lang_rep_EmployeeStates = "员工状态"; //Employee States
	$lang_rep_JoinedDate = "入职日期"; //Joined Date

	$lang_rep_SelectPayGrade = "选择薪水等级"; //Select Salary Grade
	$lang_rep_SelectEducation = "选择教育类别"; //Select Education Type
	$lang_rep_SelectEmploymentType = "选择雇佣类别"; //Select Employment Type
	$lang_rep_SelectComparison = "选择比较"; //Select Comparison
	$lang_rep_SelectJobTitle = "选择职位名"; //Select Job Title
	$lang_rep_SelectLanguage = "选择语言"; //Select Language
	$lang_rep_SelectSkill = "选择技能"; //Select Skill

	$lang_rep_Field = "字段"; //Field
	$lang_rep_AssignUserGroups = "选择组"; //Assign User Groups
	$lang_rep_AssignedUserGroups = "当前组"; //Assigned User Groups

	$lang_rep_SelectAtLeastOneCriteriaAndOneField = "至少选择一个查询条件和一个字段"; //Select at least one criteria and one field
	$lang_rep_SelectTheComparison = "选择比较"; //Select The Comparison

	$lang_rep_AgeShouldBeNumeric = "年龄应该是数字"; //Age Should Be Numeric
	$lang_rep_InvalidAgeRange = "选择的第二个年龄大于第一个"; //2nd Selected Age Lager Than The 1st Selected Age

	$lang_rep_FieldNotSelected = "字段尚未选择"; //Field Not Selected

	$lang_rep_DateShouldBeNumeric = "日期应该是数字"; //Date Should Be Numeric
	$lang_rep_ValueShouldBeinYears = "日期值应该和年份匹配"; //Value Should Be in Years
	$lang_rep_InvalidRange = "范围无效"; //Invalid Range

	$lang_rep_Report = "报告"; //Report
	$lang_rep_EmployeeNo = "员工编号"; //Employee No
	$lang_rep_EmployeeFirstName = "名"; //Employee First Name
	$lang_rep_EmployeeLastName = "姓"; //Employee Last Name
	$lang_rep_ReportTo = "汇报对象"; //Report to
	$lang_rep_ReportingMethod = "汇报方法"; //Reporting Method
	$lang_rep_Address = "地址"; //Address
	$lang_rep_Telephone = "电话"; //Telephone
	$lang_rep_DateOfBirth = "出生日期"; //Date of Birth
	$lang_rep_Skills = "技能"; //Skills
	$lang_rep_SalaryGrade = "薪酬等级"; //Salary Grade
	$lang_rep_EmployeeStatus = "雇员状态"; //Employee Status
	$lang_rep_JoinedDate = "入职日期"; //Joined Date
	$lang_rep_SubDivision = "分支"; //Sub Division
	$lang_rep_JobTitle = "职位"; //Job Title
	$lang_rep_YearOfPassing = "过去的年数"; //Year of Passing
	$lang_rep_Contract = "合同期"; //Contract
	$lang_rep_WorkExperience = "工作经验"; //Work Experience

	$lang_rep_SelectAtLeaseOneUserGroupToAssign = "至少为用户选择一个组以便加入"; //Select at least one User Group check box to assign
	$lang_rep_SelectAtLeaseOneUserGroupToDelete = "至少为用户选择一个组以便删除"; //Select at least one User Group check box to delete

	$lang_rep_ReportDefinition = "报告定义"; //Report Definition
	$lang_rep_AssignUserGroups = "选择组"; //Assign User Groups
	$lang_rep_UserGroups = "所属组"; //User Groups
	$lang_rep_UserGroup = "用户组"; //User Group
	$lang_rep_NoUserGroupsAssigned = "用户没有所属组"; //No User Groups Assigned
	$lang_rep_SelectUserGroup = "选择用户组"; //Select User Group
	$lang_rep_NoGroupSelected = "请选择一个用户组"; //Please select a user group to assign
	$lang_rep_ReportNameEmpty = "报告名为空"; //Report Name Empty

	$lang_rep_Error_DUPLICATE_NAME_ADDED = "名字不能是空!"; //Name cannot be a blank value!
	$lang_rep_Error_ADD_FAILURE = "报告无法添加."; //Report could not be added.
	$lang_rep_Error_UPDATED_TO_DUPLICATE_NAME = "修改报告失败,报告名已经存在."; //Changes to the report could not be updated. Report name already exists.
	$lang_rep_Error_UPDATE_FAILURE = "修改报告失败"; //Changes to the report could not be updated

	// Skills
	$lang_Admin_Skill_Errors_NameCannotBeBlank = "名字不能是空!"; //Name cannot be a blank value!


	// Email Notification Subscription
	$lang_Admin_EMX_MailConfiguration = "邮件设置"; //Mail Configuration
	$lang_Admin_SubscribeToMailNotifications = "订阅邮件提醒"; //Subscribe to E-mail Notifications
	$lang_Admin_ENS_LeaveApplications = "休假申请"; //Leave Applications
	$lang_Admin_ENS_LeaveApprovals = "休假许可"; //Leave Approvals
	$lang_Admin_ENS_LeaveCancellations = "休假取消"; //Leave Cancellations
	$lang_Admin_ENS_LeaveRejections = "休假否决"; //Leave Rejections
	$lang_Admin_ENS_JobApplications = "求职申请"; //Job Applications
	$lang_Admin_ENS_HspNotifications = "HSP提醒"; //HSP Notifications
    $lang_Admin_ENS_SeekHireApproval = "新员工雇用批准请求"; //New employee hire approval requests
    $lang_Admin_ENS_HiringTasks = "员工工作分配"; //Tasks sent on hiring of employee
    $lang_Admin_ENS_HiringApproved = "新雇员入职提醒"; //Notifications of hiring new employees

	//Users
	$lang_Admin_Users_Errors_UsernameShouldBeAtleastFiveCharactersLong = "用户名应不少于5个字符"; //UserName should be atleast five characters long
	$lang_Admin_Users_Errors_PasswordShouldBeAtleastFourCharactersLong = "密码应不少于4个字符"; //Password should be atleast four characters long
	$lang_Admin_Users_ErrorsPasswordMismatch = "密码不匹配"; //Password Mismatch
	$lang_Admin_Users_Errors_EmployeeIdShouldBeDefined = "请输入员工编号"; //Employee ID should be defined
	$lang_Admin_Users_Errors_FieldShouldBeSelected = "此处应当被选中"; //Field should be selected
	$lang_Admin_Users_Errors_ModuleShouldBeSelected = "请选择一个模块指定权利"; //Please select a module to assign the rights
	$lang_Admin_Users_Errors_ViewShouldBeSelected = "视图应被选中"; //View should be selected
	$lang_Admin_Users_Errors_PasswordsAreNotMatchingRetypeYourNewPassword = "密码不匹配，重新输入新密码"; //Passwords Are Not Matching.Retype Your New Password
	$lang_Admin_Users_Errors_SpecialCharacters = "用户名不能包含特殊字符"; //The username should not contain special characters
	$lang_Admin_Users_WrongPassword = "密码不匹配"; //Mismatch with your old password
    $lang_Admin_Users_Errors_AdminUserGroupShouldBeSelected = "必须选择管理员用户群组"; //Admin User Group should be selected

	$lang_Admin_Users_Errors_DoYouWantToClearRights = "是否清除权限?"; //Do you want to clear Rights
	$lang_Admin_Users_Errors_SameGroup = "当前登陆用户属于这个组"; //Your login account belongs to the same User Group, you are not allowed change rights to this group
	$lang_Admin_Users_Errors_NameCannotBeBlank = "名称不可为空"; //Name cannot be blank

	$lang_Admin_Users_Modules = "模块"; //Modules
	$lang_Admin_Users_Module = "模块"; //Module
	$lang_Admin_Users_RightsAssignedToUserGroups = "组已拥有权限"; //Rights Assigned to User Groups
	$lang_Admin_Users_UserGroup = "用户组"; //User Group
	$lang_Admin_Users_UserGroupId = "用户组编号"; //User Group ID
	$lang_Admin_Users_SelectModule = "选择模块"; //Select Module

	$lang_Admin_Users_UserName = "用户名"; //User Name
	$lang_Admin_Users_Password = "密码"; //Password
	$lang_Admin_Users_Employee = "员工"; //Employee

	$lang_Admin_Users_ConfirmPassword = "确认密码"; //Confirm Password

	$lang_Admin_Users_Status = "状态"; //Status
	$lang_Admin_Users_Enabled = "启用"; //Enabled
	$lang_Admin_Users_Disabled = "禁用"; //Disabled

	$lang_Admin_Users_UserGroup = "管理员组"; //Admin User Group
	$lang_Admin_Users_SelectUserGroup = "选择用户组"; //Select User Group

	$lang_Admin_Users_NewPassword = "新密码"; //New Password
	$lang_Admin_Users_ConfirmNewPassword = "确认新密码"; //Confirm New Password

	$lang_Admin_Users_add = "添加"; //Add
	$lang_Admin_Users_delete = "删除"; //Delete
	$lang_Admin_Users_view = "查看"; //View
	$lang_Admin_Users_edit = "编辑"; //Edit

	$lang_Admin_Users_AssignedRights = "当前拥有的权限"; //Assigned Rights
	$lang_Admin_Users_DefineReports = "定义报告"; //Define Reports
	$lang_Admin_Users_Assign_User_Rights = "分配用户权限"; //Assign User Rights
	$lang_Admin_Users_View_User_Rights = "查看用户权限"; //View User Rights

	$lang_Admin_Change_Password_OldPassword = "旧密码"; //Old Password

	$lang_Admin_Change_Password_Errors_EnterYourOldPassword = "输入旧密码"; //Enter Your Old Password
	$lang_Admin_Change_Password_Errors_EnterYourNewPassword = "输入新密码"; //Enter Your New Password
	$lang_Admin_Change_Password_Errors_RetypeYourNewPassword = "重新输入新密码"; //Retype Your New Password
	$lang_Admin_Change_Password_Errors_PasswordsAreNotMatchingRetypeYourNewPassword = "密码不匹配，重新输入新密码"; //Passwords Are Not Matching.Retype Your New Password
	$lang_Admin_Change_Password_Errors_YourOldNewPasswordsAreEqual = "新旧密码相同"; //Your Old and New Passwords Are Equal

	$lang_Admin_Project = "项目"; //Project
	$lang_Admin_Project_CutomerName = "客户名称"; //Customer Name
	$lang_Admin_Project_SelectCutomer = "选择客户"; //Select customer
	$lang_Admin_Project_Administrators = "项目管理者"; //Project Administrators
	$lang_Admin_Project_EmployeeName = "员工姓名"; //Employee Name
	$lang_Admin_Project_EmployeeAlreadyAnAdmin = "此员工已经是当前项目的管理者了。"; //Selected employee is already a project admin for this project.

	$lang_Admin_Project_Error_PleaseDSpecifyTheProjectId = "请指定项目编号"; //Please specify the Project Id
	$lang_Admin_Project_Error_PleaseSelectACustomer = "请选择客户"; //Please select a customer
	$lang_Admin_Project_Error_PleaseSpecifyTheName = "请填写客户名称"; //Please specify the name

	$lang_Admin_Customer_PleaseSpecifyTheCustormerId = "请具体说明客户编号"; //Please specify the custormer Id
	$lang_Admin_Customer_Error_PleaseSpecifyTheName = "请填写客户名称"; //Please specify the name

	$lang_Admin_ProjectActivities = "项目活动"; //Project Activities
    $lang_Admin_AssignedActivities = "指定活动"; //Assigned Activities
	$lang_Admin_Activity = "活动"; //Activity
	$lang_Admin_Project_Activity_ClickOnActivityToEdit = "点击一个已存在存的活动则可进行更名操作"; //Click on an existing activity to rename
	$lang_Admin_Project_Activity_Error_PleaseSpecifyTheActivityName = "请填写活动名称"; //Please specify the activity name
	$lang_Admin_Project_Error_NoProjects = "项目未找到。"; //No projects found.
	$lang_Admin_Project_NoActivitiesDefined = "尚未制定活动。"; //No Activities defined.
	$lang_Admin_Project_Activity_Error_NameAlreadyDefined = "此项目中已经存在一个同名的活动。请选用其它名字。"; //An Activity with that name already exists in this project. Please select a different name.

    //Company Property
    $lang_Admin_Company_Property = "公司财产"; //Company Property
    $lang_Admin_Company_Property_Title = "公司信息: 公司财产"; //Company Info: Company Property
    $lang_Admin_Property_Name = "财产名称"; //Property Name
    $lang_Admin_Prop_Emp_Name = "员工"; //Employee
    $lang_Admin_Company_Property_Err_Del_Not_Sel = "请选择一个删除项!"; //Please select a property to delete!
    $lang_Admin_Company_Property_Err_Name_Empty = "财产名称不能为空!"; //Property name is empty!
    $lang_Admin_Company_Property_Err_Name_Exists = "财产名称已经存在!"; //Property name is already exists!
    $lang_Admin_Company_Property_Warn_Delete = "想删除选中内容吗?"; //Do you want to delete selected items?
    $lang_Admin_Property_Please_Select = "没有指定"; //Not Assigned

	//timesheet
	$lang_Time_Module_Title = "OrangeHRM - 时间和出席模块"; //OrangeHRM - Time and Attendance Module
	$lang_Time_Timesheet_TimesheetForViewTitle = "时间表#periodName的开始时间#startDate"; //Timesheet for #periodName starting #startDate
	$lang_Time_Timesheet_TimesheetForEditTitle = "编辑自#startDate一#periodName时间表"; //Edit timesheet for #periodName starting #startDate

	$lang_Time_Timesheet_TimesheetNameForViewTitle = "#startDate#name一#periodName的时间表"; //Timesheet for #name for #periodName starting #startDate
	$lang_Time_Timesheet_TimesheetNameForEditTitle = "编辑名称为#名称#周期名称开始于#开始日期的时间表"; //Edit timesheet for #name for #periodName starting #startDate
	$lang_Time_Timesheet_EditTimesheetForWeekStarting = "修改一周时间表，起自"; //Edit timesheet for week starting
	$lang_Time_Timesheet_DeletedProjectsAndActivitiesNotice = "已删除项目/活动被标以星号%s。点击其中一个项目/活动来编辑"; //Deleted projects/activities are marked with an asterisk %s. Click on a project/activity to edit.

	$lang_Time_Timesheet_Status = "状态: #status"; //Status: #status

	$lang_Time_Timesheet_Status_NotSubmitted = "未提交"; //Not submitted
	$lang_Time_Timesheet_Status_Submitted = "已提交"; //Submitted
	$lang_Time_Timesheet_Status_Approved = "已同意"; //Approved
	$lang_Time_Timesheet_Status_Rejected = "已否决"; //Rejected

	$lang_Time_Timesheet_Customer = "客户"; //Customer
	$lang_Time_Timesheet_ProjectActivity = "项目/活动"; //Project / Activity
	$lang_Time_Timesheet_Project = "项目"; //Project
	$lang_Time_Timesheet_Activity = "活动"; //Activity
        $lang_Time_Timesheet_Project_Deleted = "Show Deleted";
	$lang_Time_Timesheet_Total = "合计"; //Total
	$lang_Time_TimeFormat = "时间格式"; //Time Format
	$lang_Time_Timesheet_ApprovedReport = "批准的员工考勤报告"; //Employee Time Report for Approved Timesheets

	$lang_Time_Errors_SUBMIT_SUCCESS = "提交成功"; //Submit succeeded
	$lang_Time_Errors_SUBMIT_FAILURE = "提交失败"; //Submit failed
	$lang_Time_Errors_UPDATE_SUCCESS = "更新成功"; //Successfully updated
	$lang_Time_Errors_UPDATE_FAILURE = "更新失败"; //Failed to update
	$lang_Time_Errors_CANCEL_SUCCESS = "取消成功"; //Successfully cancelled
	$lang_Time_Errors_CANCEL_FAILURE = "取消失败"; //Failed to cancel
	$lang_Time_Errors_APPROVE_SUCCESS = "批准成功"; //Successfully approved
	$lang_Time_Errors_APPROVE_FAILURE = "批准失败"; //Failed to approve
	$lang_Time_Errors_REJECT_SUCCESS = "拒绝成功"; //Successfully rejected
	$lang_Time_Errors_REJECT_FAILURE = "拒绝失败"; //Failed to reject
	$lang_Time_Errors_DELETE_SUCCESS = "删除成功"; //Successfully deleted
	$lang_Time_Errors_DELETE_FAILURE = "删除失败"; //Failed to delete
	$lang_Time_Errors_UNAUTHORIZED_FAILURE = "未授权的操作"; //Unauthorized action
	$lang_Time_Errors_APPROVED_TIMESHEET_FAILURE = "无法向已批准的时间表中添加事件"; //Time event can not be added to an approved timesheet
	$lang_Time_Errors_REJECTED_TIMESHEET_FAILURE = "无法向已否决的时间表中添加事件"; //Time event can not be added to a rejected timesheet

	$lang_Time_Errors_NO_TIMESHEET_FAILURE = "没有找到时间表"; //No timesheet found
	$lang_Time_Errors_INVALID_TIME_FAILURE = "指定的时间无效"; //Invalid time specified
	$lang_Time_Errors_INVALID_DURATION_FAILURE = "指定的时长无效"; //Invalid duration specified
	$lang_Time_Errors_EVENT_START_AFTER_END_ERROR = "事件起始时间晚于结束时间。"; //Event start time after end time.
	$lang_Time_Errors_INVALID_TIMESHEET_PERIOD_ERROR = "无效的时间段"; //Invalid timesheet period.
	$lang_Time_Errors_UNFINISHED_TIMESHEET_FAILURE = "时间表中包含没有完成的活动"; //Timesheet contains unfinished activities
	$lang_Time_Errors_DUPLICATE_ROWS = "发现重复行"; //Duplicate rows found
	$lang_Time_Errors_NO_PROJECT_SELECTED = "请选择项目"; //Please select a project
	$lang_Time_Errors_NO_ACTIVITY_SELECTED = "请选择项目"; //Please select an activity
	$lang_Time_Errors_MaxTotalDuration = '一天的总时间不能超过24小时'; //Total duration of a day cannot exceed 24 hours

	$lang_Time_Errors_EncounteredTheFollowingProblems = "遇到以下问题。出错的行以高亮显示。"; //Encountered the following problems. Rows with errors are highlighted.
	$lang_Time_Errors_EncounteredFollowingProblems = "遇到以下问题"; //Encountered following problems
	$lang_Time_Errors_ReportedDateNotSpecified_ERROR = "报告日期未指定"; //Reported date not specified
	$lang_Time_Errors_ProjectNotSpecified_ERROR = "项目未指定"; //Project not specified
	$lang_Time_Errors_CustomerNotSpecified_ERROR = "客户未指定"; //Customer not specified
	$lang_Time_Errors_InvalidTimeOrZeroOrNegativeIntervalSpecified_ERROR = "无效的日期，或经计算后为零或负的时间"; //Invalid time or zero or negative interval specified
	$lang_Time_Errors_NotAllowedToSpecifyDurationAndInterval_ERROR = "不能同时选择时间间隔和时间段"; //Cannot specify both an interval and a duration
	$lang_Time_Errors_InvalidReportedDate_ERROR = "无效的报告日期。"; //Invalid value for Reported date.
	$lang_Time_Errors_InvalidDuration_ERROR = "时间段应当是一个有效正数"; //Duration should be a valid positive number
	$lang_Time_Errors_InvalidStartTime_ERROR = "无效的起始时间"; //Invalid time value for start time
	$lang_Time_Errors_InvalidEndTime_ERROR = "无效的结束时间"; //Invalid time value for end time
	$lang_Time_Errors_EVENT_OUTSIDE_PERIOD_FAILURE = "事件的时间必须在计划表的时间范围内。"; //Event time must be within the timesheet period.
	$lang_Time_Errors_NoValidDurationOrInterval_ERROR = "没有指定有效的时期或时间间隔"; //No valid duration or interval specified
	$lang_Time_Errors_ZeroOrNegativeIntervalSpecified_ERROR = "时间间隔为零或负值"; //Zero or negative interval specified
	$lang_Time_Errors_NO_EVENTS_WARNING = "没有可保存的事件"; //No events to save

	$lang_Time_Timesheet_StartTime = "起始时间"; //Start time
	$lang_Time_Timesheet_EndTime = "结束时间"; //End time
	$lang_Time_Timesheet_ReportedDate = "报告日期"; //Reported date
	$lang_Time_Timesheet_Duration = "工时"; //Duration
	$lang_Time_Timesheet_DurationUnits = "(小时)"; //(hours)
	$lang_Time_Timesheet_Decription = "描述"; //Description
	$lang_Time_Timesheet_NoCustomers = "无客户"; //No customers
	$lang_Time_Timesheet_NoProjects = "无项目"; //No projects
	$lang_Time_Timesheet_IncludeDeleteProjects = "包括已删除的项目"; //Include deleted projects

	$lang_Time_Select_Employee_Title = "选择员工"; //Select Employee

	$lang_Time_Select_Employee_SubmittedTimesheetsPendingSupervisorApproval = "提交的时间表正在被管理员审核"; //Submitted timesheets pending supervisor approval
	$lang_Time_Select_Employee_WeekStartingDate = "自#date的一周"; //Week starting #date

	$lang_Time_Select_Employee_TimesheetPeriod = "工作报告周期"; //Timesheet period

	$lang_Time_Errors_PleaseAddAComment = "请添加注释"; //Please add a comment

	$lang_mtview_ADD_SUCCESS 				= "添加成功"; //Successfully Added
	$lang_mtview_UPDATE_SUCCESS 			= "更新成功"; //Successfully Updated
	$lang_mtview_DELETE_SUCCESS 			= "删除成功"; //Successfully Deleted
	$lang_mtview_ADD_FAILURE 				= "添加失败"; //Failed to Add
	$lang_mtview_UPDATE_FAILURE 			= "更新失败"; //Failed to Update
	$lang_mtview_DELETE_FAILURE 			= "删除失败"; //Failed to Delete

	// Attendance
	$lang_Time_Menu_Attendacne = "考勤"; //Attendance
	$lang_Time_Menu_PunchInOut = "考勤"; //Punch In/Out
	$lang_Time_Heading_PunchIn = "到达"; //Punch In
	$lang_Time_Heading_PunchOut = "离开"; //Punch Out
	$lang_Time_LastPunchIn = "最后达到时间"; //Last punched in was at
	$lang_Time_Menu_AttendanceConfiguration = "设置"; //Configuration
	$lang_Time_AttendanceConfiguration = "出勤设置"; //Attendance Configuration
	$lang_Time_EmpChangeTime = "当员工上班/下班时，显示的当前时间就会改变。"; //Employee can change displayed current time when he punches in/out
	$lang_Time_EmpEditSubmitted = "员工可以修改提交的出勤记录"; //Employee can edit submitted attendance records
	$lang_Time_SupEditSubmitted = "上级可以修改下级提交的出勤记录"; //Supervisor can edit submitted attendance records of subordinates
	$lang_Time_AttendanceConfigSaving_SUCCESS = "出勤设置保存成功"; //Attendance configuration saved sucessfully
	$lang_Time_AttendanceConfigSaving_FAILURE = "保存出勤设置失败"; //Failed saving attendance configuration
	$lang_Time_PunchSaving_SUCCESS = "记录已保存"; //Record saved
	$lang_Time_PunchSaving_FAILURE = "保存记录失败"; //Saving record failed
	$lang_Time_Errors_InvalidMaxTime = "输入的时间无效。最大允许： 23:59"; //Invalid time entered. Maximum acceptable time is 23:59

	$lang_Time_Menu_MyReports = "我的报表"; //My Reports
	$lang_Time_Menu_EmployeeReports = "员工报表"; //Employee Reports
	$lang_Time_Heading_Attendance_Report = "出勤报告"; //Attendance Report
	$lang_Time_ReportType = "报表类型"; //Report Type
	$lang_Time_Option_Summary = "简要"; //Summary
	$lang_time_Option_Detailed = "详细"; //Detailed
	$lang_Time_Button_Generate = "生成"; //Generate
	$lang_Time_In = "到达"; //In
	$lang_Time_Out = "离开"; //Out

	$lang_Time_Attendance_ReportSavingSuccess = "出勤报告保存成功"; //Attendance report saved successfully
	$lang_Time_Attendance_ReportSavingFailure = "保存出勤报告失败"; //Saving attendace report failed
	$lang_Time_Attendance_ReportNoChange = "没有更改，无需保存"; //No changes to save
	$lang_Time_Attendance_Overlapping = "发现了冲突的记录"; //Overlapping records found
	$lang_Time_Attendance_NoReports = "没有报告可显示"; //No reports to display
	$lang_Time_Attendance_InvalidOutTime = "下班时间应该晚于上班时间"; //Punch Out time should be greater than Punch In time
	$lang_Time_Attendance_EnterValidDates = "请输入有效的开始、结束日期"; //Please enter valid dates for To Date and From Date
	$lang_Time_Attendance_EnterValidDateRange = "请输入有效的日期范围（开始日期必须早于结束日期）"; //Please enter a valid date range (From Date must be before To Date)
	$lang_Time_Attendance_NoteTooLong = "注释太长"; //Note is too long

	// 2.2 Time module
	$lang_Time_PunchInPunchOutTitle = "考勤"; //Punch In/Out

	$lang_Time_Errors_InvalidDateOrTime = "无效的日期或时间"; //Invalid date or time
	$lang_Time_Errors_CurrentPunchTimeBeforeLastPunchTime = "打卡时间不能在最后记录时间前"; //Punch time cannot be before last time punched
	$lang_Time_Errors_ZeroOrNegativeDurationTimeEventsAreNotAllowed = "零或者负的时间段是不允许的"; //Zero or negative duratons are not allowed
	$lang_Time_Errors_ActivityNotSpecified_ERROR = "未指定活动"; //Activity not specified

	$lang_Menu_Time_PunchInOut = "考勤"; //Punch In/Out

	$lang_Time_Timesheet_SelectProject = "选择一个项目"; //Select a Project
	$lang_Time_Timesheet_SelectProjectFirst = "请先选择一个项目"; //Select a Project First
	$lang_Time_Timesheet_SelectActivity = "选择一个活动"; //Select an Activity

	$lang_Time_Timesheet_UnfinishedActivitiesTitle = "未完成的活动"; //Unfinished Activities
	$lang_Time_SubmitTimeEventTitle = "提交事件"; //Submit Time Event

	$lang_Time_Timesheet_DateReportedFor = "报告时间"; //Date reported for

	$lang_Time_UnfinishedActivitiesTitle = "未完成的活动"; //Unfinished Activities
	$lang_Time_Add_NewEvent = "添加新的时间事件"; //Add New Time Event
	$lang_Time_NewEvent = "新事件"; //New Event
	$lang_Time_Complete = "完成"; //Complete

	$lang_Time_DurationFormat = "hh:mm或者0.00小时"; //hh:mm or 0.00h
	$lang_Time_InsertTime="插入时间"; //Insert time

	$lang_Time_Errors_NO_RECORDS_CHANGED_WARNING = "没有改变无需保存"; //No changes to save
	$lang_Time_Errors_EXCEPTION_THROWN_WARNING = "遇到一个系统问题"; //Encountered a problem

	$lang_Menu_Time_ProjectTime = "项目时间"; //Project time

	$lang_Time_DefineTimesheetPeriodTitle = "定义周期"; //Define Timesheet Period

	$lang_Time_FirstDayOfWeek = "周的第一天"; //First Day of Week

	$lang_Menu_Time_DefineTimesheetPeriod = "定义周期"; //Define Timesheet Period

	$lang_Time_EmployeeTimeReportTitle = "员工计划报表"; //Employee Time Report

	$lang_Time_Common_FromDate = $lang_Leave_Common_FromDate;
	$lang_Time_Common_ToDate = $lang_Leave_Common_ToDate;
	$lang_Time_Common_All = $lang_Leave_Common_All;

	$lang_Time_Errors_EmployeeNotSpecified = "没有指明员工"; //Employee not specified

	$lang_Time_Errors_InvalidDateOrZeroOrNegativeRangeSpecified = "无效的日期，或经计算后为零或负的时间"; //Invalid date or zero or negative range specified

	$lang_Time_Warning = '警告'; //Warning
	$lang_Time_Warning_FieldsWereReset = '由于跟踪误差，字段将被重置'; //Fields were reset due to following errors
	$lang_Time_Warning_NoMatchingEmployeeFound = '没有发现与名字为#employeeName相匹配的员工'; //No matching employee found for the name #employeeName.
	$lang_Time_Warning_NoMatchingSupervisorFound = '没有发现与名字为#supervisorName相匹配的主管'; //No matching supervisor found for the name #supervisorName.

	$lang_Menu_Time_EmployeeReports = "人员报表"; //Employee Reports

	$lang_Time_SelectTimesheetsTitle = "选择表单"; //Select Timesheets
	$lang_Time_Division = $lang_compstruct_Division;
	$lang_Time_Supervisor = $lang_empview_Supervisor;
	$lang_Time_EmploymentStatus = $lang_empview_EmploymentStatus;

	$lang_Time_NoEmploymentStatusDefined = "未指定员工状态"; //No employment status defined

	$lang_Time_SelectWeekStartDay = "请选择一周的开始日"; //Please select week start day
	$lang_Time_ContactAdminForTimesheetPeriodSet = "没有设定时间表的开始日期,请与管理员联系"; //Timesheet period start day has not been defiend. Please contact HR Admin
	$lang_Time_ContactAdminForTimesheetPeriodSetComplete = "时间表的开始日期设定完成"; //Timesheet period start day has been set
	$lang_Time_ProceedWithTimeModule = "时间表的开始日期设定完成"; //Proceed with Time Module

	$lang_Time_PrintTimesheetsTitle = "打印表单"; //Print Timesheets
	$lang_Time_Print = "打印"; //Print

	$lang_Common_Loading = "正在加载"; //Loading
	$lang_Common_Select = "选择"; //Select";

	$lang_Menu_Time_PrintTimesheets = "打印表单"; //Print Timesheets

	$lang_Menu_Time_ProjectReports = "项目报表"; //Project Reports
	$lang_Time_ProjectReportTitle = "项目报表"; //Project Reports
	$lang_Time_Report_To = "到"; //To
	$lang_Time_Report_From = "从"; //From
	$lang_Time_TimeInHours = "时间(小时)"; //Time (hours)
	$lang_Time_ActivityReportTitle = "活动细节"; //Activity Details
	$lang_Time_Activity_Report_EmployeeName = "员工姓名"; //Employee Name
	$lang_Time_Activity_Report_View = "查看"; //View
	$lang_Time_Activity_Report_TotalTime = "总时间"; //Total Time
	$lang_Time_Activity_Report_NoEvents = "没有找到任何事件。"; //No events found.

	$lang_Time_Errors_PROJECT_NOT_FOUND_FAILURE = "没有找到项目。"; //Project not found.
	$lang_Time_Errors_ACTIVITY_NOT_FOUND_FAILURE = "没有找到活动。"; //Activity not found.
	
	$lang_Time_TimeGrid_Hide_Comments = "隐藏注释"; //Hide Comments
	$lang_Time_TimeGrid_ViewOrHide_Comments = "查看/隐藏注释"; //View/Hide Comments
	$lang_Time_TimeGrid_RemoveRow_Warning = "你已选择永久性删除行，按确认键继续"; //You have chosen to remove the row(s) permanently.\n\tPress OK to continue.
	$lang_Time_TimeGrid_NoRowSelected_Warning = "没有选择要删除的行"; //No row(s) selected to be deleted
	$lang_Time_TimeGrid_RemoveRow_Success = "成功删除行"; //Row(s) were deleted successfully
	 $lang_Time_TimeGrid_RemoveRow_PartialSuccess = "有部分行未删除"; //Some of the rows could not be deleted
	 $lang_Time_TimeGrid_RemoveRow_Failure = "删除行失败"; //Failed to delete row(s)

	$lang_Common_Yes = "是"; //Yes
	$lang_Common_No = "否"; //No

	$lang_Leave_DoYouWantToCancelTheLeaveYouJustAssigned = "取消预定的休假计划?"; //Do you want to cancel the leave you just assigned?
	$lang_Leave_PleaseProvideAReason = "请给出原因"; //Please provide a reason

	$lang_Time_Errors_OVERLAPPING_TIME_PERIOD_FAILURE = "此时间段和已经预定的活动有冲突"; //You have a overlapping time period in your time events

	$lang_view_DUPLICATE_NAME_FAILURE = "相同的名字已被使用"; //The same name is already used

	$lang_Leave_CopyLeaveQuotaFromLastYear = "从去年复制休假配额"; //Copy leave quota from last year
	$lang_Leave_CopyLeaveBroughtForwardFromLastYear = "从去年复制休剩余天数"; //Copy leave brought forward from last year

	$lang_Leave_LEAVE_QUOTA_COPY_SUCCESS = "复制休假配额完成"; //Successfully copied leave quota
	$lang_Leave_LEAVE_QUOTA_COPY_FAILURE = "复制休假配额失败"; //Failed to copy leave quota

	$lang_Leave_LEAVE_BROUGHT_FORWARD_COPY_SUCCESS = "成功复制休假剩余天数"; //Successfully copied leave brought forward
	$lang_Leave_LEAVE_BROUGHT_FORWARD_COPY_FAILURE = "无法复制休假剩余天数"; //Failed to copy leave brought forward

	// Recruitment module
 	$lang_Recruit_VacancyID = '空缺编号'; //Vacancy ID
 	$lang_Recruit_JobTitleName = '职位名称'; //Job Title
 	$lang_Recruit_HiringManager = '招聘经理'; //Hiring Manager
 	$lang_Recruit_VacancyStatus = '状态'; //Status
 	$lang_Recruit_JobVacancyDeletionMessage = '删除可能会影响申请者信息'; //Deletion may affect Job applications
 	$lang_Recruit_JobVacancyListHeading = '空缺职位'; //Job Vacancies
 	$lang_Recruit_JobVacancy_Active = '有效'; //Active
 	$lang_Recruit_JobVacancy_InActive = '无效'; //Inactive
 	$lang_Recruit_JobVacancy_Add_Heading = '添加空缺职位'; //Add Job Vacancy
 	$lang_Recruit_JobVacancy_Edit_Heading = '编辑空缺职位'; //Edit Job Vacancy
 	$lang_Recruit_JobVacancy_JobTitleSelect = '选择'; //Select
 	$lang_Recruit_JobVacancy_HiringManagerSelect = '选择'; //Select
 	$lang_Recruit_JobVacancy_PleaseSpecifyJobTitle = '请指定一个职位名称'; //Please specify Job Title
 	$lang_Recruit_JobVacancy_PleaseSpecifyHiringManager = '请指定一个招聘经理'; //Please specify Hiring Manager
 	$lang_Recruit_AllowedValuesAre = '允许值为: '; //Allowed Values are: 
	$lang_Recruit_NoManagersNotice = '没有可选招聘经理,请先在职位名称中添加招聘经理后再指定'; //No managers found. You need to create a job title named \'Manager\' and assign to employees who are managers.
	$lang_Recruit_NoHiringManagersNotice = '没有可选招聘经理,请先在职位名称中添加招聘经理后再指定'; //No employees found to be assigned as Hiring Managers. You need to add employees\' data to the system.

    $lang_Recruit_JobApplicationList_Heading = '应聘者'; //Applicants
    $lang_Recruit_JobApplicationList_Name = '名字'; //Name
    $lang_Recruit_JobApplicationList_PositionApplied = '应聘的职位'; //Position Applied
    $lang_Recruit_JobApplicationList_Actions = '行动'; //Actions
    $lang_Recruit_JobApplicationList_EventHistory = '历史记录'; //Event History
    $lang_Recruit_JobApplicationList_Details = '详情'; //Details
    $lang_Recruit_JobApplicationList_NoApplications = '没有找到应聘者'; //No Applicants found

    $lang_Recruit_JobApplicationStatus_Submitted = '提交的申请'; //Application Submitted
    $lang_Recruit_JobApplicationStatus_FirstInterview = '第一次面试'; //1st Interview
    $lang_Recruit_JobApplicationStatus_SecondInterview = '第二次面试'; //2nd Interview
    $lang_Recruit_JobApplicationStatus_JobOffered = '许诺的职位'; //Job Offered
    $lang_Recruit_JobApplicationStatus_OfferDeclined = '被拒绝的职位'; //Offer Declined
    $lang_Recruit_JobApplicationStatus_PendingApproval = '待批准的申请'; //Pending Approval
    $lang_Recruit_JobApplicationStatus_Hired = '批准'; //Hired
    $lang_Recruit_JobApplicationStatus_Rejected = '被否决'; //Rejected

    $lang_Recruit_JobApplicationAction_Reject = '否决'; //Reject
    $lang_Recruit_JobApplicationAction_FirstInterview = '设定第一次面试'; //Schedule 1st Interview
    $lang_Recruit_JobApplicationAction_SecondInterview = '设定第二次面试'; //Schedule 2nd Interview';
    $lang_Recruit_JobApplicationAction_OfferJob = '职位分配'; //Offer Job
    $lang_Recruit_JobApplicationAction_MarkDeclined = '拒绝工作申请'; //Mark Offer Declined
    $lang_Recruit_JobApplicationAction_SeekApproval = '寻求批准'; //Seek Approval
    $lang_Recruit_JobApplicationAction_Approve = '批准'; //Approve
    $lang_Recruit_JobApplicationAction_Interview_Time_Format = 'HH:MM';

    $lang_Recruit_JobApplicationDetails_Heading = '申请详情'; //Application Details
    $lang_Recruit_JobApplicationDetails_Status = '申请状态'; //Application Status
    $lang_Recruit_JobApplicationDetails_Actions = '操作'; //Actions
    $lang_Recruit_JobApplicationHistory_EventHistory = '事件历史'; //Event History
    $lang_Recruit_JobApplicationHistory_ApplicationForThePositionOf = '对这个职位的申请：'; //Application for the position of
    $lang_Recruit_JobApplicationHistory_DateApplied = '申请日期'; //Date Applied
    $lang_Recruit_JobApplicationHistory_NoEvents = '没有事件'; //No Events available
    $lang_Recruit_JobApplicationHistory_FirstInterview = '第一次面试'; //1st Interview
    $lang_Recruit_JobApplicationHistory_SecondInterview = '第二次面试'; //2nd Interview
    $lang_Recruit_JobApplicationHistory_Rejected = '被拒绝'; //Rejected
    $lang_Recruit_JobApplicationHistory_OfferedJob = '职位分配'; //Offered Job
    $lang_Recruit_JobApplicationHistory_OfferMarkedAsDeclined = '职位分配标记为“被拒绝”'; //Offer marked as declined
    $lang_Recruit_JobApplicationHistory_SeekApproval = '寻求批准'; //Seek Approval
    $lang_Recruit_JobApplicationHistory_Approved = '已批准'; //Approved
    $lang_Recruit_JobApplicationHistory_By = '由'; //By
    $lang_Recruit_JobApplicationHistory_ScheduledBy = '预定者'; //Scheduled By';
    $lang_Recruit_JobApplicationHistory_At = '在'; //At
    $lang_Recruit_JobApplicationHistory_InterviewTime = '面试时间'; //Interview Time
    $lang_Recruit_JobApplicationHistory_Interviewer = '面试官'; //Interviewer
    $lang_Recruit_JobApplicationHistory_Status = '状态'; //Status
    $lang_Recruit_JobApplicationHistory_Notes = '记录'; //Notes
    $lang_Recruit_JobApplicationHistory_StatusInterviewScheduled = '已预定'; //Scheduled
    $lang_Recruit_JobApplicationHistory_StatusFinished = '已结束'; //Finished
    $lang_Recruit_JobApplication_ScheduleFirstInterview = '预定第一次面试，对'; //Schedule 1st Interview for
    $lang_Recruit_JobApplication_ScheduleSecondInterview = '预定第二次面试，对'; //Schedule 2nd Interview for
    $lang_Recruit_JobApplication_Schedule_Date = '日期'; //Date
    $lang_Recruit_JobApplication_Schedule_Time = '时间'; //Time
    $lang_Recruit_JobApplication_Schedule_Interviewer = '面试官'; //Interviewer
    $lang_Recruit_JobApplication_Schedule_Notes = '记录'; //Notes
    $lang_Recruit_JobApplication_Select = '选择'; //Select
    $lang_Recruit_JobApplication_PleaseSpecifyDate = '请指定面试日期'; //Please specify interview Date
    $lang_Recruit_JobApplication_PleaseSpecifyTime = '请指定面试时间'; //Please specify interview Time
    $lang_Recruit_JobApplication_PleaseSpecifyInterviewer = '请指定面试官'; //Please specify Interviewer
    $lang_Recruit_JobApplication_PleaseSpecifyValidDate = '面试日期格式: '; //Date should be in the format: 
    $lang_Recruit_JobApplication_PleaseSpecifyValidTime = '面试时间格式: '; //Time should be in the format: 
    $lang_Recruit_JobApplication_SecondInterviewShouldBeAfterFirst = '第二次面试必须在第一次面试之后'; //Second interview date should be after the first interview date 

    $lang_Recruit_JobApplicationConfirm_Heading = '确认操作: '; //Confirm Action: 
    $lang_Recruit_JobApplicationConfirm_ApplicantName = '面试者姓名'; //Applicant Name
    $lang_Recruit_JobApplicationConfirm_Position = '面试职位：'; //Position Applying for

    $lang_Recruit_JobApplicationConfirm_ConfirmReject = '确认拒绝以上应聘'; //Confirm Reject of above application
    $lang_Recruit_JobApplicationConfirm_ConfirmRejectDesc = '此举将发送 email 给应聘者，通知他已被拒绝。'; //This will send an email to the applicant informing of the rejection
    $lang_Recruit_JobApplicationConfirm_ConfirmOfferJob = '确认面试通过信息.'; //Confirm Job Offer to above applicant.
    $lang_Recruit_JobApplicationConfirm_ConfirmOfferJobDesc = '系统不会发送邮件给应聘者,请联系应聘者发送申请通过信息.'; //No emails will be sent by the system to the applicant. The applicant will have to be contacted and offered the job.
    $lang_Recruit_JobApplicationConfirm_ConfirmMarkDeclined = '标记拒绝的应聘'; //Mark Offer Declined
    $lang_Recruit_JobApplicationConfirm_ConfirmMarkDeclinedDesc = '应聘者拒绝了这个职位.'; //Indicates that the applicant has declined the Job Offer.
    $lang_Recruit_JobApplicationConfirm_ConfirmSeekApproval = '请求批准'; //Seek Approval
    $lang_Recruit_JobApplicationConfirm_ConfirmApprove = '确认批准以上的应聘'; //Confirm Approval of above applicant
    $lang_Recruit_JobApplicationConfirm_ConfirmApproveDesc = '系统会自动记录已经聘用的应聘者,确认信息会发送到人事经理,但是,应聘者不会收到确认邮件.'; //This will mark the applicant as hired and create an employee entry in the system for the applicant. The hiring manager will be notified, but no emails will be sent to the applicant.

    $lang_Recruit_JobApplication_SeekApproval_Heading = '寻求批准'; //Seek Approval to Hire 
    $lang_Recruit_JobApplication_SeekApproval_GetApprovedBy = '批准人'; //Get approved by 
    $lang_Recruit_NoDirectorsNotice = '系统没有找到匹配的人事主管, 请先在系统管理中设定人事主管这个职位后,指定人事主管的人选.'; //No directors found. You need to create a job title named \'Director\' and assign to employees who are directors.
    $lang_Recruit_JobApplication_SeekApproval_Notes = '记录'; //Notes
    $lang_Recruit_JobApplication_SeekApproval_Desc = '将向所选人员发送 email , 请求批准聘用.'; //An email will be sent to the chosen person, asking for approval to hire.
    $lang_Recruit_JobApplication_PleaseSpecifyDirector = '请指定有权批准的人事主管'; //Please specify a director to get approved by
    $lang_Recruit_JobApplication_PleaseSpecifyNotes = '请填写记录'; //Please provide some notes

	$lang_Recruit_ApplicantVacancyList_Heading = '空缺职位'; //Job Vacancies
	$lang_Recruit_ApplicantVacancyList_Title = '空缺职位'; //Job Vacancies
	$lang_Recruit_ApplicationForm_Heading = '这个职位的应聘'; //Application Form for a position with 
	$lang_Recruit_Application_CompanyNameNotSet = '没有设定公司名称'; //Company Name not set
	$lang_Recruit_ApplicationForm_Position = '应聘的职位'; //Position Applying for
	$lang_Recruit_Applicant_NoVacanciesFound = '没有发现空缺职位,请下次查看.'; //No Job Vacancies found. Please check back later.
    $lang_Recruit_Applicant_ExpandAll = '全部展开'; //Expand All
    $lang_Recruit_Applicant_CollapseAll = '全部折叠'; //Collapse All

	$lang_Recruit_ApplicationForm_FirstName = '名'; //First Name
	$lang_Recruit_ApplicationForm_MiddleName = '中间名'; //Middle Name
	$lang_Recruit_ApplicationForm_LastName = '姓'; //Last Name
	$lang_Recruit_ApplicationForm_Street1 = '地址1'; //Street 1
	$lang_Recruit_ApplicationForm_Street2 = '地址2'; //Street 2
	$lang_Recruit_ApplicationForm_City = '城市'; //City
	$lang_Recruit_ApplicationForm_StateProvince = '州/省'; //State / Province
	$lang_Recruit_ApplicationForm_Country = '国家'; //Country
	$lang_Recruit_ApplicationForm_Zip = '邮编'; //Zip Code
	$lang_Recruit_ApplicationForm_Phone = '电话'; //Phone
	$lang_Recruit_ApplicationForm_Mobile = '手机'; //Mobile
	$lang_Recruit_ApplicationForm_Email = 'Email';
	$lang_Recruit_ApplicationForm_Qualifications = '资质和经验'; //Qualifications and Experience
	$lang_Recruit_ApplicationForm_Resume = '简历'; //Resume
	$lang_Recruit_ApplicationForm_ResumeDownload = '下载'; //Download
	$lang_Recruit_ApplicationForm_ResumeDescription = '文件必须小于1MB，只允许.doc,.docx,.odt,.pdf,.rtf,.txt格式'; //Size should be less than 1MB and only .doc, .docx, .odt, .pdf, .rtf, .txt are allowed

	$lang_Recruit_ApplicationForm_PleaseSpecify = '请指定 '; //Please Specify 
	$lang_Recruit_ApplicationForm_PleaseSpecifyValidEmail = '请指定有效的email'; //Please Specify valid email address for 
	$lang_Recruit_ApplicationForm_PleaseSpecifyValidPhone = '请指定有效的电话'; //Please Specify valid phone number for 
	$lang_Recruit_ZipContainsNonNumericChars = '邮编包含非数字字符。继续吗？'; //Zip code contains non-numeric characters. Do you want to continue?
	$lang_Recruit_ApplicationForm_PleaseSelect = '请选择 '; //Please Select 

	$lang_Recruit_ApplicationStatus_SuccessHeading = '接到的职位应聘'; //Job Application Received
	$lang_Recruit_ApplicationStatus_FailureHeading = '职位应聘错误'; //Job Application Error
	$lang_Recruit_ApplySuccess = '我们已经收到了您关于 #jobtitle# 应聘'; //Your application for the position of #jobtitle# was received
	$lang_Recruit_ApplicantEmailedSuccess = '确认信函已经发送到 #email# 了'; //An email confirmation was sent to the following email address: #email#
	$lang_Recruit_ApplyFailure = '系统在处理您应聘的时候出现错误,请稍候再次尝试.'; //There was an error while processing your application. Please try again later
	$lang_Recruit_ApplyFailure_UploadError = '上传您的简历时出错了. 因此您的应聘没有提交成功。请再试一次。'; //There was an error when uploading your resume. Therefore your application was not submitted. Please try again
	$lang_Recruit_ApplyFailure_UploadSizeError = '您的简历文件大小超过了1MB'; //Your resume size exceeds the allowed limit of 1MB
	$lang_Recruit_ApplyFailure_UploadTypeError = '您提交的简历文件类型不正确. 只允许.doc,.docx,.odt,.pdf,.rtf,.txt格式'; //Your resume file type is not allowed. Only .doc, .docx, .odt, .pdf, .rtf and .txt are allowed
	$lang_Recruit_ApplicationStatus_FailureRetry = '重新提交'; //Retry Submission
 
	$lang_Recruit_Resume_DeletionSucceeded = '简历删除成功'; //Resume Was Successfully Deleted
	$lang_Recruit_Resume_DeletionFailed = '简历删除失败'; //Deleting Resume Failed
	$lang_Recruit_Resume_ReplaceSucceeded = '简历添加成功'; //Resume Was Successfully Added
	$lang_Recruit_Resume_ReplaceFailed = '简历添加失败'; //Adding Resume Failed

	// login page
	$lang_login_title = "OrangeHRM - 人力资源管理的新标准"; //OrangeHRM - New Level of HR Management
	$lang_login_UserNameNotGiven = "没有输入用户名！"; //User Name not given!
	$lang_login_PasswordNotGiven = "没有输入密码！"; //Password not given!
	$lang_login_NeedJavascript = "需要在浏览器中启用JavaScript"; //You need a JavaScript enabled Browser. Ex.
	$lang_login_MozillaFirefox = "火狐浏览器"; //Mozilla Firefox
	$lang_login_YourSessionExpired = "会话已经过期。请重新登陆。"; //Your session expired because you were inactive. Please re-login.
	$lang_login_LoginName = "用户名"; //Login Name
	$lang_login_Password = "密码"; //Password
	$lang_login_Login = "登陆"; //Login
	$lang_login_Clear = "清除"; //Clear
	$lang_login_InvalidLogin = "用户名无效"; //Invalid Login
	$lang_login_UserDisabled = "此用户被禁用"; //User Disabled
	$lang_login_EmployeeTerminated = "登录被拒绝"; //Login denied
	$lang_login_NoEmployeeAssigned = "员工未被授予登陆帐号"; //No Employee assigned to the ESS user account
	$lang_login_temporarily_unavailable = "系统临时关闭"; //Service Temporarily Unavailable
	$lang_login_OrangeHRMDescription = "是一款以高效管理和深度开发人力资源为目标的，全面而广泛的应用解决方案。它能帮助企业实现复杂且具有战略性的资源管理过程。由于本软件采用模块化的结构，它几乎能够处理现实活动中人事管理事务的方方面面。基于灵活性的考虑而采用网页浏览器方式的操作，使本软件成为重构人事管理过程和提升人事管理水准的一个优秀的平台。"; // comes as a comprehensive solution for the efficient management and development of your Human Resource. It will assist you in the complex and strategic process of managing this crucial resource of your enterprise. Based on modular architecture, it facilitates a vastrange of HR activities, with features that reflect the main HR management activities. It comes as a web-enabled application and considering the available flexibility, OrangeHRM is a perfect platform for reengineering your HR processes and achieving a new level of HR Management.

	$lang_Leave_Common_FromTime = "起始时间"; //From time
	$lang_Leave_Common_ToTime = "终止时间"; //To time
	$lang_Leave_Common_TotalHours = "总小时数"; //Total hours
	$lang_Leave_Error_ToTimeBeforeFromTime = "终止时间早于起始时间"; //To time before from time
	$lang_Leave_Error_ZeroLengthHours = "休假时间是0小时"; //Length of the leave is zero hours
	$lang_Leave_Error_TotalTimeMoreThanADay = "总时间大于每班周期"; //Total time is greater than the shift length
	$lang_Leave_Common_WorkshiftLengthIs = "工作周期长: "; //Workshift length is 
	$lang_Leave_Error_PleaseSpecifyEitherTotalTimeOrTheTimePeriod = "请指定总时间或一段时期"; //Please specify either total time or the time period

	$lang_Leave_Error_DuplicateLeaveError = "您的休假申请和下列申请重复."; //Your leave request overlaps with the following existing leave requests.
	$lang_Leave_Error_DuplicateLeaveErrorInstructions = "请取消有冲突的已存在的休假请求，或者修改下面的休假请求并重试。"; //Please cancel existing leave requests that overlap or change the leave request below and retry.

	$lang_Leave_Error_DuplicateLeaveWarning = "下列休假申请和当前休假申请在同一天"; //The following leave requests are on the same day as the current leave request
	$lang_Leave_Error_DuplicateLeaveWarningInstructions = "请再次检查休假申请后再提交,以确认或修改休假时间."; //Please review the existing leave requests and submit again to confirm or change the leave period if needed.

	$lang_Leave_Duration = "时长(小时)"; //Duration(hours)
	$lang_Common_Hours = "小时"; //hours
	$lang_Common_Days = "天"; //days

	$lang_Time_WorkShifts = "工作排班"; //Work Shifts
	$lang_Time_ShiftName = "班次名称"; //Shift Name
	$lang_Time_HoursPerDay = "每天工作时长"; //Hours Per Day
	$lang_Time_AvailableEmployees = "未指派的员工"; //Available Employees
	$lang_Time_AssignedEmployees = "已指派的员工"; //Assigned Employees
	$lang_Time_AssignEmployeesTitle = "编辑工作班次"; //Work Shift Edit
    $lang_Time_WorkShift_Add = "添加新班次"; //Add new Work Shift

	$lang_Time_Error_SpecifyWorkShiftName = "指定工作班名称"; //Specify work shift name
	$lang_Time_Error_SpecifyHoursPerDay = "指定每天工作时长"; //Specify hours per day
	$lang_Time_Error_DecimalNotAllowed = "不允许为小数"; //Decimal numbers are not allowed
	$lang_Time_Error_HoursPerDayShouldBePositiveNumber = "每天的时间不能为负数"; //Hours per day should be a positive number
	$lang_Time_Error_HoursPerDayShouldBeLessThan24 = "每天不能超过24小时"; //Hours per day should be less than 24
	$lang_Time_Error_HoursPerDayShouldBeANumericValue = "每天工作时长必须是个数值"; //Hours per day should be a numeric value
	$lang_Time_Error_NoEmployeeSelected = "没有选择员工"; //No employee selected

	$lang_Time_Errors_INVALID_WORK_SHIFT_FAILURE = "工作班次信息中出现问题"; //There were problems in the work shift details
	$lang_Time_Errors_NO_RECORDS_SELECTED_FAILURE = "没有选择删除记录"; //No records selected to delete
	$lang_Time_Errors_UNKNOWN_ERROR_FAILURE = "出现一个错误"; //Encountered an error
	$lang_Time_Errors_INVALID_ID_FAILURE = "无效的编号"; //Invalid id

	$lang_Menu_Time_WorkShifts = "班次"; //Work shifts

	include 'lang_default_benefits.php';

	$lang_Common_To = "到"; //to

    // Leave Calendar

    $plugin_leave_Calendar = 'Leave Calendar';