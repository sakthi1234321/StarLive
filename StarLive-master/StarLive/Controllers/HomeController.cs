using StarLive.DAL.Common;
using StarLive.DAL.Models;
using StartLive.Entity.UserBAL;
using StartLive.Entity.VideoBAL;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace StarLive.Controllers
{
    public class HomeController : Controller
    {
        private readonly UserBal _userBal;
        private readonly VideoBal _videoBal;

        public HomeController()
        {
            _userBal = UserBal.instance;
            _videoBal = VideoBal.instance;
        }
        public ActionResult Index()
        {
            ViewBag.UserType = _userBal.GetUserTypeList();
            ViewBag.Videos = _videoBal.GetVideoList();
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }

        [HttpPost]
        public JsonResult Register(UserModel model)
        {
            if (_userBal.CheckUserNameExist(model.UserName))
                return Json(new JsonResponse() { Message = "UserName already exist!" }, JsonRequestBehavior.AllowGet);
            _userBal.CreateUser(model);
            return Json(new JsonResponse() { Status = true }, JsonRequestBehavior.AllowGet);
        }

        [HttpPost]
        public JsonResult Login(UserModel Model)
        {
            var user = _userBal.LoginUser(Model.UserName, Model.Password);
            if (user == null)
                return Json(new JsonResponse() { Status = false, Message = "Invalid UserName and Password!" }, JsonRequestBehavior.AllowGet);
            Session.Add("username", user.UserName);
            Session.Add("userid", user.UserID);
            return Json(new JsonResponse() { Status = true }, JsonRequestBehavior.AllowGet);
        }

        [HttpGet]
        public ActionResult Logout()
        {
            Session.Clear();
            return RedirectToAction("Index");
        }

        [HttpGet]
        public ActionResult Upload()
        {
            ViewBag.VideoCategory = _videoBal.GetVideoCategoryList();
            return View();
        }

        [HttpPost]
        public JsonResult UploadFile()
        {
            var file = Request.Files[0];
            BinaryReader videoReader = new BinaryReader(file.InputStream);
            byte[] videoBytes = videoReader.ReadBytes(file.ContentLength);
            string videoPath = $"/UploadVideos/{file.FileName}";
            Session["videopath"] = videoPath;
            string uploadPath = Server.MapPath("~/UploadVideos");
            if (!Directory.Exists(uploadPath))
            {
                Directory.CreateDirectory(uploadPath);
            }
            System.IO.File.WriteAllBytes(Path.Combine(uploadPath, file.FileName), videoBytes);
            return Json(new JsonResponse() { Status = true }, JsonRequestBehavior.AllowGet);
        }

        [HttpPost]
        public JsonResult CreateVideo(UploadModel model)
        {
            if (Session["videopath"] == null)
                return Json(new JsonResponse() { Status = false, Message = "First upload the video" }, JsonRequestBehavior.AllowGet);
            if (Session["userid"] == null)
                return Json(new JsonResponse() { Status = false, Message = "You can't upload video without login!" }, JsonRequestBehavior.AllowGet);
            model.URL = Session["videopath"].ToString();
            model.UserID = Convert.ToInt32(Session["userid"]);
            _videoBal.CreateUser(model);
            return Json(new JsonResponse() { Status = true }, JsonRequestBehavior.AllowGet);
        }

        [HttpGet]
        public ActionResult Video(int Id)
        {
            return View(_videoBal.GetVideoById(Id));
        }
    }
}