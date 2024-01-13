# klradio
K L Radio Web Site 
Requirements PHP v7.8 MySQL , AWS S3 Credentials
Mailing Service used in this project is provided by Hostinger no other Explicit SMTP Mailing is Used.

SQL Schema:
tables list:
`user` {id,fullName,email,mobile,sid,password(hash),createdOn,designation}
`login_history`{id,logInCount,last_login}
`update_history`{id,last_update}
`login_designation` {id,designation} ->{(0,user),(1,team_member)}

`team` {id,fullName,designation,email,mobile,sid,addedOn}
`team_member_profile` {id,profile_image(url)}
`team_member_social_media` {id,twitter,facebook,instagram,linkedin}
