using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace StarLive.DAL.Models
{
    public class UserModel
    {
        public int UserID { get; set; }

        public string UserName { get; set; }

        public string Password { get; set; }

        public string EmailAddress { get; set; }

        public long MobileNumber { get; set; }

        public string ParentName { get; set; }

        public int UserTypeID { get; set; }
    }
}