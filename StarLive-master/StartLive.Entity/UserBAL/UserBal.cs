using StarLive.DAL.Common;
using StarLive.DAL.Entity;
using StarLive.DAL.Models;
using StarLive.DAL.Repository;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace StartLive.Entity.UserBAL
{
    public class UserBal
    {
        private static UserBal _instance = null;
        private UserRepository userRepository = null;
        public UserBal()
        {
            userRepository = UserRepository.instance;
        }

        public static UserBal instance
        {
            get
            {
                if (_instance == null)
                    _instance = new UserBal();
                return _instance;
            }
        }

        public List<UserModel> GetUserList()
        {
            List<UserModel> listUserModel = new List<UserModel>();
            listUserModel = userRepository.GetUserList().Select(grp => new UserModel
            {
                UserID = grp.UserID,

            }).ToList();
            return listUserModel;
        }

        public List<KeyValuePair<int, string>> GetUserTypeList() => userRepository.GetUserTypeList();

        public bool CheckUserNameExist(string userName)
        {
            return userRepository.CheckUserNameExist(userName);
        }

        public void CreateUser(UserModel user)
        {
            userRepository.CreateUser(user);
            Email.SendEmail(user.EmailAddress, "User Registration", "You have successfully registered in Star Live Application");
        }

        public User LoginUser(string userName, string password)
        {
            return userRepository.LoginUser(userName, password);
        }
    }

}
