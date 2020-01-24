using StarLive.DAL.Common;
using StarLive.DAL.DBContext;
using StarLive.DAL.Entity;
using StarLive.DAL.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Web.Mvc;
namespace StarLive.DAL.Repository
{
    public class UserRepository
    {
        private static UserRepository _instance = null;
        private UserRepository()
        {

        }

        public static UserRepository instance
        {
            get
            {
                if (_instance == null)
                    _instance = new UserRepository();
                return _instance;
            }
        }
        #region  "Helper method"

        public List<User> GetUserList()
        {
            using (var db = new StarDBContexts())
            {
                return db.AppUsers.ToList();
            }
        }

        public List<KeyValuePair<int, string>> GetUserTypeList()
        {
            using (var db = new StarDBContexts())
            {
                var userTypes = new List<KeyValuePair<int, string>>();
                var result =db.UserTypes.ToList();
                foreach(var type in result)
                {
                    userTypes.Add(new KeyValuePair<int, string>(type.UserTypeID, type.UserTypeName));
                }
                return userTypes;
            }
        }

        public bool CheckUserNameExist(string userName)
        {
            using(var db = new StarDBContexts())
            {
                return db.AppUsers.Where(x => x.UserName.ToLower() == userName).Any();
            }
        }

        public void CreateUser(UserModel user)
        {
            using (var db = new StarDBContexts())
            {
                db.AppUsers.Add(new User()
                {
                    CreatedDate = DateTime.Now,
                    Email=user.EmailAddress,
                    MobileNumber = user.MobileNumber,
                    ParentName=user.ParentName,
                    Password = EncodeDecode.Encryptdata(user.Password),
                    UserName = user.UserName,
                    FK_UserTypeID = user.UserTypeID
                });
                db.SaveChanges();
            }
        }

        public User LoginUser(string userName,string Password)
        {
            using (var db = new StarDBContexts())
            {
                var encpwd = EncodeDecode.Encryptdata(Password);
                return db.AppUsers.Where(x => (x.UserName == userName || x.Email == userName) && x.Password == encpwd).FirstOrDefault();
            }
        }

        #endregion
      
    }
}
