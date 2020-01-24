using StarLive.DAL.DBContext;
using StarLive.DAL.Entity;
using StarLive.DAL.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace StarLive.DAL.Repository
{
    public class VideoRepository
    {
        private static VideoRepository _instance = null;
        private VideoRepository()
        {

        }

        public static VideoRepository instance
        {
            get
            {
                if (_instance == null)
                    _instance = new VideoRepository();
                return _instance;
            }
        }

        public List<VideoCategory> GetVideoCategoryList()
        {
            using (var db = new StarDBContexts())
            {
                return db.VideoCategorys.ToList();
            }
        }

        public void CreateVideo(UploadModel model)
        {
            using (var db = new StarDBContexts())
            {
                db.Videos.Add(new Video()
                {
                    CreatedDate=DateTime.Now,

                    Description= model.Description,
                    Embedded=model.Embedded,
                    FK_CategoryID=model.Category,
                    Title=model.Title,
                    URL=model.URL,
                    FK_UserID = model.UserID
                });
                db.SaveChanges();
            }
        }

        public UploadModel GetVideoById(int Id)
        {
            using(var db = new StarDBContexts())
            {
                return db.Videos.Where(x => x.VideoID == Id).Select(x => new UploadModel()
                {
                    Description = x.Description,
                    Embedded=x.Embedded,
                    Title=x.Title,
                    URL=x.URL,
                    UserID = x.FK_UserID
                }).FirstOrDefault();
            }
        }

        public List<UploadModel> GetVideoList()
        {
            using (var db = new StarDBContexts())
            {
                return db.Videos.Select(x => new UploadModel()
                {
                    Description = x.Description,
                    Embedded = x.Embedded,
                    Title = x.Title,
                    URL = x.URL,
                    UserID = x.FK_UserID,
                    VideoID = x.VideoID
                }).ToList();
            }
        }
    }
}
