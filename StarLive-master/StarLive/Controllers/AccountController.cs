using StarLive.DAL.Common;
using StarLive.DAL.Models;
using StartLive.Entity.UserBAL;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace StarLive.Controllers
{
    public class AccountController : Controller
    {
        private readonly UserBal _userBal;
        public AccountController()
        {
            _userBal = UserBal.instance;
        }

        [HttpGet]
        public ActionResult Register()
        {
            return View();
        }

        [NonAction]
        [HttpPost]
        public JsonResult Register(UserModel model)
        {
            if (_userBal.CheckUserNameExist(model.UserName))
                return Json(new JsonResponse() {Message="UserName already exist!" }, JsonRequestBehavior.AllowGet);
            _userBal.CreateUser(model);
            return Json(new JsonResponse() { Status=true }, JsonRequestBehavior.AllowGet);
        }

        [HttpGet]
        public ActionResult Login()
        {
            return View();
        }

        [NonAction]
        [HttpPost]
        public JsonResult Login(UserModel Model)
        {
            var user = _userBal.LoginUser(Model.UserName, Model.Password);
            if (user != null)
                return Json(new JsonResponse() { Message = "Invalid UserName and Password!" }, JsonRequestBehavior.AllowGet);
            Session.Add("username", user.UserName);
            Session.Add("password", user.Password);
            return Json(new JsonResponse() { Status = true }, JsonRequestBehavior.AllowGet);
        }

        [HttpGet]
        public ActionResult Logout()
        {
            Session.Clear();
            return RedirectToAction("Login");
        }
    }
}