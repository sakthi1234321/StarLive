using StarLive.DAL.Common;
using StarLive.DAL.Entity;
using StarLive.DAL.Models;
using StarLive.DAL.Repository;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace StartLive.Entity.VideoBAL
{
    public class VideoBal
    {
        private static VideoBal _instance = null;
        private VideoRepository videoRepository = null;
        public VideoBal()
        {
            videoRepository = VideoRepository.instance;
        }

        public static VideoBal instance
        {
            get
            {
                if (_instance == null)
                    _instance = new VideoBal();
                return _instance;
            }
        }

        public List<VideoCategoryModel> GetVideoCategoryList()
        {
            List<VideoCategoryModel> listVideoCategoryModel = new List<VideoCategoryModel>();
            listVideoCategoryModel = videoRepository.GetVideoCategoryList().Select(grp => new VideoCategoryModel
            {
                CategoryID = grp.CategoryID,
                CategoryName = grp.CategoryName

            }).ToList();
            return listVideoCategoryModel;
        }
        
        public void CreateUser(UploadModel upload) => videoRepository.CreateVideo(upload);

        public UploadModel GetVideoById(int Id) => videoRepository.GetVideoById(Id);

        public List<UploadModel> GetVideoList() => videoRepository.GetVideoList();
    }

}
